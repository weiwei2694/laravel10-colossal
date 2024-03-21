<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $posts = Post::query();
        if (auth()->user()->is_admin) {
            $posts->where('user_id', request()->query('user_id'));

            if (!request()->query('user_id')) {
                $posts->orWhereNotNull('user_id');
            }
        } else {
            $posts->where('user_id', auth()->id());
        }

        if (request('search')) {
            $searchTerm = '%' . request('search') . '%';
            $posts->where(function (Builder $query) use ($searchTerm) {
                $query->where('title', 'like', $searchTerm)
                    ->orWhere('subtitle', 'like', $searchTerm)
                    ->orWhere('tags', 'like', $searchTerm);
            });
        }

        $posts = $posts->paginate(10);

        return response()
            ->view('dashboard.posts.index', [
                'posts' => $posts
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()
            ->view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): RedirectResponse
    {
        request()->validate([
            "title" => ["required", "max:149"],
            "subtitle" => ["required", "max:74"],
            "body" => ["required"],
            "reading_time" => ["required", "integer", "min:1"],
            "tags" => ["required"],
            "image" => ["required", "file", "max:1024"]
        ]);

        $tags = json_encode(explode(',', request()->input('tags')));

        $fileName = time() . request()->file('image')->getClientOriginalName();
        $path = request()->file('image')->storeAs('images/posts', $fileName, 'public');

        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->title = request()->input('title');
        $post->subtitle = request()->input('subtitle');
        $post->tags = $tags;
        $post->image = $path;
        $post->reading_time = request()->input('reading_time');
        $post->body = request()->input('body');
        $post->save();

        return redirect()->route('dashboard.posts.index')->with('success', 'Post Successfully Created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): Response
    {
        return response()
            ->view('dashboard.posts.show', [
                'post' => $post
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): Response
    {
        $this->authorize('manage-posts', $post);

        return response()
            ->view('dashboard.posts.edit', [
                'post' => $post
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post): RedirectResponse
    {
        $this->authorize('manage-posts', $post);

        $rules = [
            "title" => ["required", "max:149"],
            "subtitle" => ["required", "max:74"],
            "body" => ["required"],
            "reading_time" => ["required", "integer", "min:1"],
            "tags" => ["required"],
        ];
        if (request()->hasFile('image')) {
            $rules['image'] = ["required", "file", "max:1024"];
        }
        request()->validate($rules);

        $tags = json_encode(explode(',', request()->input('tags')));

        $post->user_id = auth()->user()->id;
        $post->title = request()->input('title');
        $post->subtitle = request()->input('subtitle');
        $post->tags = $tags;
        if (request()->hasFile('image')) {
            Storage::disk('public')->delete($post->image);

            $fileName = time() . request()->file('image')->getClientOriginalName();
            $path = request()->file('image')->storeAs('images/posts', $fileName, 'public');
            $post->image = $path;
        }
        $post->reading_time = request()->input('reading_time');
        $post->body = request()->input('body');
        $post->save();

        return redirect()
            ->route('dashboard.posts.index')
            ->with('success', 'Post Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        $this->authorize('manage-posts', $post);

        Storage::disk('public')->delete($post->image);
        $post->delete();

        return redirect()
            ->route('dashboard.posts.index')
            ->with('success', 'Post Deleted Successfully.');
    }
}
