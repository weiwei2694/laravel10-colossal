<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Response;

class PricingController extends Controller
{
    public function index(): Response
    {
        $faqs = Faq::latest()->take(6)->get();

        return response()
            ->view('pricing.index', compact('faqs'));
    }
}
