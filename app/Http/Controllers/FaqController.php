<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class FaqController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('faq.index');
    }
}
