<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class QuoteController extends Controller
{
    public function index(): Response
    {
        $quotes = Quote::query();

        if (request('is_read') && request('is_read') !== 'all') {
            $quotes->where('is_read', request('is_read') === 'yes');
        }

        if (request('company_size') && request('company_size') !== 'all') {
            $quotes->where('company_size', request('company_size'));
        }

        if (request('search')) {
            $searchTerm = '%' . request('search') . '%';
            $quotes->where(function (Builder $query) use ($searchTerm) {
                $query->where('name', 'like', $searchTerm)
                    ->orWhere('company', 'like', $searchTerm);
            });
        }

        $quotes = $quotes->paginate(10);

        return response()
            ->view('dashboard.admin.quotes.index', compact('quotes'));
    }

    public function show(Quote $quote): Response
    {
        return response()
            ->view('dashboard.admin.quotes.show', compact('quote'));
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
