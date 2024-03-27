<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\{Response, JsonResponse, RedirectResponse};

class BlogController extends Controller
{
    public function index(): Response|JsonResponse
    {
        $blogs = Post::with('user')
            ->paginate(6);
        $headTitle = 'Blogs';

        if (request()->ajax()) {
            $view = view('components.cards-blog', compact('blogs'))->render();
            return response()->json(['html' => $view]);
        }

        return response()
            ->view('blogs.index.index', compact('blogs', 'headTitle'));
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

    public function show(Post $post): Response|JsonResponse
    {
        $blogs = Post::latest()->take(3)->where('id', '!=', $post->id)->get();
        $comments = Comment::where('post_id', $post->id)->paginate(3);
        $headTitle = "Blog | $post->title";

        if (request()->ajax()) {
            $view = view('components.cards-comment', compact('comments'))->render();
            return response()->json(['html' => $view]);
        }

        return response()
            ->view('blogs.show.show', compact('post', 'blogs', 'comments', 'headTitle'));
    }
}
