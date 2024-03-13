<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Response;

class FaqController extends Controller
{
    public function index(): Response
    {
        $faqs = Faq::with('faqCategory')
            ->paginate(10);

        return response()
            ->view('dashboard.admin.faqs.index', compact('faqs'));
    }
}
