<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class BlogController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('blog.index.index');
    }
}
