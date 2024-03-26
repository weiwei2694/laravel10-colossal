<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class TermOfServiceController extends Controller
{
    public function index(): Response
    {
        $headTitle = 'Term Of Services';

        return response()
            ->view('term-of-service.index', compact('headTitle'));
    }
}
