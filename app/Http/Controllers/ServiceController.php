<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    public function index(): Response
    {
        $headTitle = "Services";

        return response()
            ->view('services.index.index', compact('headTitle'));
    }

    public function show(): Response
    {
        $faqs = Faq::latest()->take(6)->get();
        $headTitle = "Service Detail";

        return response()
            ->view('services.show.show', compact('faqs', 'headTitle'));
    }
}
