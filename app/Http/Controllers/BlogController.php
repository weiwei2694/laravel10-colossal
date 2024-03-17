<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    public function index(): Response|JsonResponse
    {
        $blogs = Post::with('user')
            ->paginate(6);

        if (request()->ajax()) {
            $view = view('components.cards-blog', compact('blogs'))->render();
            return response()->json(['html' => $view]);
        }

        return response()
            ->view('blogs.index.index', compact('blogs'));
    }

    public function createComment(Post $post): RedirectResponse
    {
        request()->validate([
            'name' => 'required|max:74',
            'email' => 'required|email|max:149',
            'content' => 'required|max:449',
        ]);

        $comment = new Comment();
        $comment->name = request()->input('name');
        $comment->email = request()->input('email');
        $comment->content = request()->input('content');
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()
            ->back()
            ->with('success', 'Comment has been successfully created');
    }

    public function show(Post $post): Response
    {
        $blogs = Post::latest()->take(3)->where('id', '!=', $post->id)->get();

        return response()
            ->view('blogs.show.show', compact('post', 'blogs'));
    }
}
