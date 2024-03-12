<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuoteController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('quote.index');
    }
}
