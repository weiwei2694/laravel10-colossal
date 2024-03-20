<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class QuoteController extends Controller
{
    public function index(): Response
    {
        $quotes = Quote::paginate(10);

        return response()
            ->view('dashboard.admin.quotes.index', compact('quotes'));
    }

    public function update(Quote $quote): RedirectResponse
    {
        $quote->is_read = 1;
        $quote->save();

        return redirect()
            ->route('dashboard.quotes.index')
            ->with('success', 'Quote updated successfully.');
    }

    public function destroy(Quote $quote): RedirectResponse
    {
        $quote->delete();

        return redirect()
            ->route('dashboard.quotes.index')
            ->with('success', 'Quote deleted successfully.');
    }
}
