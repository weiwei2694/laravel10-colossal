<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    public function index(): Response
    {
        $sponsors = Sponsor::all();

        return response()
            ->view('about.index', compact('sponsors'));
    }
}
