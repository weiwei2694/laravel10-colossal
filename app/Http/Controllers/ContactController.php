<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ContactController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('contact.index');
    }
}
