<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('services.index.index');
    }
}
