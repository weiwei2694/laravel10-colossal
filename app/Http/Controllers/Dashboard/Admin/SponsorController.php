<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $sponsors = Sponsor::paginate(10);

        return response()
            ->view('dashboard.admin.sponsors.index', [
                "sponsors" => $sponsors
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()
            ->view('dashboard.admin.sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): RedirectResponse
    {
        request()->validate([
            'name' => 'required|max:74',
            'image' => 'required|file|max:1024'
        ]);

        $fileName = time() . request()->file('image')->getClientOriginalName();
        $path = request()->file('image')->storeAs('images/sponsors', $fileName, 'public');

        $sponsor = new Sponsor();
        $sponsor->name = request()->input('name');
        $sponsor->image = $path;
        $sponsor->save();

        return redirect()
            ->route('dashboard.sponsors.index')
            ->with('success', 'Sponsor Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsor $sponsor): Response
    {
        return response()
            ->view('dashboard.admin.sponsors.show', [
                'sponsor' => $sponsor
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponsor $sponsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sponsor $sponsor)
    {
        //
    }
}
