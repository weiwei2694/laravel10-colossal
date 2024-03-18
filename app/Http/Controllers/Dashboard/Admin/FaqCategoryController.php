<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Response;

class FaqCategoryController extends Controller
{
    public function index(): Response
    {
        $faqCategories = FaqCategory::paginate(10);

        return response()
            ->view('dashboard.admin.faq-category.index', compact('faqCategories'));
    }
}
