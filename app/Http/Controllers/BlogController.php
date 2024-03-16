<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
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
}
