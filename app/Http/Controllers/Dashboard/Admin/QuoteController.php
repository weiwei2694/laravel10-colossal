<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Response;

class QuoteController extends Controller
{
    public function index(): Response
    {
        $quotes = Quote::paginate(10);

        return response()
            ->view('dashboard.admin.quotes.index', compact('quotes'));
    }
}
