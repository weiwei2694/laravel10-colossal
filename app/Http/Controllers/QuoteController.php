<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuoteController extends Controller
{
    public function index(): Response
    {
        $company_sizes = Quote::COMPANY_SIZE;
        $headTitle = 'Quote';

        return response()
            ->view('quote.index', compact('company_sizes', 'headTitle'));
    }

    public function store(): RedirectResponse
    {
        request()->validate([
            'name' => 'required|max:74',
            'email' => 'required|email:74',
            'company' => 'required|max:74',
            'company_size' => 'required|max:74',
            'problem' => 'required|max:999', # Max 999 chars - to prevent users from sending excessive messages
        ]);

        $quote = new Quote();
        $quote->name = request()->input('name');
        $quote->email = request()->input('email');
        $quote->company = request()->input('company');
        $quote->company_size = request()->input('company_size');
        $quote->problem = request()->input('problem');
        $quote->save();

        return redirect()
            ->route('quote.index')
            ->with('success', 'Quote has been sent, thank you!');
    }
}
