<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('services.index.index');
    }

    public function show(): Response
    {
        $faqs = Faq::latest()->take(6)->get();

        return response()
            ->view('services.show.show', compact('faqs'));
    }
}
