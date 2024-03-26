<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class HowWeWorkController extends Controller
{
    public function index(): Response
    {
        $headTitle = "How We Work";

        return response()
            ->view('how-we-work.index', compact('headTitle'));
    }
}
