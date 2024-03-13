<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\RedirectResponse;
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

    public function create(): Response
    {
        $categories = FaqCategory::all();

        return response()
            ->view('dashboard.admin.faqs.create', compact('categories'));
    }

    public function store(): RedirectResponse
    {
        request()->validate([
            'question' => 'required|max:74',
            'answer' => 'required|max:499',
            'faq_category_id' => 'required|exists:faq_categories,id',
        ]);

        $faq = new Faq();
        $faq->question = request()->input('question');
        $faq->answer = request()->input('answer');
        $faq->faq_category_id = request()->input('faq_category_id');
        $faq->save();

        return redirect()
            ->route('dashboard.faqs.index')
            ->with('success', 'Faq Created Successfully.');
    }

    public function edit(Faq $faq): Response
    {
        $categories = FaqCategory::all();

        return response()
            ->view('dashboard.admin.faqs.edit', compact('categories', 'faq'));
    }

    public function update(Faq $faq): RedirectResponse
    {
        request()->validate([
            'question' => 'required|max:74',
            'answer' => 'required|max:499',
            'faq_category_id' => 'required|exists:faq_categories,id',
        ]);

        $faq->question = request()->input('question');
        $faq->answer = request()->input('answer');
        $faq->faq_category_id = request()->input('faq_category_id');
        $faq->save();

        return redirect()
            ->route('dashboard.faqs.index')
            ->with('success', 'Faq Updated Successfully.');
    }

    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();

        return redirect()
            ->route('dashboard.faqs.index')
            ->with('success', 'Faq Deleted Successfully.');
    }
}
