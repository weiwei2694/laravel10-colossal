<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class FaqCategoryController extends Controller
{
    public function index(): Response
    {
        $faqCategories = FaqCategory::paginate(10);

        return response()
            ->view('dashboard.admin.faq-category.index', compact('faqCategories'));
    }

    public function create(): Response
    {
        return response()
            ->view('dashboard.admin.faq-category.create');
    }

    public function store(): RedirectResponse
    {
        request()->validate([
            'name' => 'required|max:74'
        ]);

        $faqCategory = new FaqCategory();
        $faqCategory->name = request()->input('name');
        $faqCategory->save();

        return redirect()
            ->route('dashboard.faq-categories.index')
            ->with('success', 'Faq category created successfully.');
    }

    public function destroy(FaqCategory $faq_category): RedirectResponse
    {
        $faq_category->delete();

        return redirect()
            ->route('dashboard.faq-categories.index')
            ->with('success', 'Faq category deleted successfully.');
    }
}
