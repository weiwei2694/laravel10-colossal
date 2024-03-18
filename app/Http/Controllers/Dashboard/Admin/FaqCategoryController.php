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
            'name' => 'required|max:74|unique:faq_categories,name',
        ]);

        $faqCategory = new FaqCategory();
        $faqCategory->name = request()->input('name');
        $faqCategory->save();

        return redirect()
            ->route('dashboard.faq-categories.index')
            ->with('success', 'Faq category created successfully.');
    }

    public function show(FaqCategory $faq_category): Response
    {
        return response()
            ->view('dashboard.admin.faq-category.show', compact('faq_category'));
    }

    public function edit(FaqCategory $faq_category): Response
    {
        return response()
            ->view('dashboard.admin.faq-category.edit', compact('faq_category'));
    }

    public function update(FaqCategory $faq_category): RedirectResponse
    {
        request()->validate([
            'name' => "required|max:74|unique:faq_categories,name,$faq_category->id"
        ]);

        $faq_category->name = request()->input('name');
        $faq_category->save();

        return redirect()
            ->route('dashboard.faq-categories.index')
            ->with('success', 'Faq category updated successfully.');
    }

    public function destroy(FaqCategory $faq_category): RedirectResponse
    {
        $faq_category->delete();

        return redirect()
            ->route('dashboard.faq-categories.index')
            ->with('success', 'Faq category deleted successfully.');
    }
}
