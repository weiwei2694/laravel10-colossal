<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class FaqController extends Controller
{
    public function index(): Response|RedirectResponse
    {
        $categories = FaqCategory::has('faqs')->get();
        $faqs = Faq::where('faq_category_id', request()->input('category'))->get();
        $headTitle = 'Faq';

        if (!request()->has('category')) {
            $validCategoryId = $categories[0]->id;
            return redirect("/faq?category=$validCategoryId");
        }

        return response()
            ->view('faq.index', compact('categories', 'faqs', 'headTitle'));
    }
}
