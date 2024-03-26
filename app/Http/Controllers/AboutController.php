<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    public function index(): Response
    {
        $sponsors = Sponsor::all();
        $ourTeams = User::where('email', '!=', 'admin@gmail.com')->get();
        $headTitle = 'About';

        return response()
            ->view('about.index', compact('sponsors', 'ourTeams', 'headTitle'));
    }
}
