<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class AboutController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('about.index');
    }
}
