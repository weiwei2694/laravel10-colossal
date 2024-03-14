<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class TermOfServiceController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('term-of-service.index');
    }
}
