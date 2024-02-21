<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()
            ->view('dashboard.admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): RedirectResponse
    {
        request()->validate([
            'name' => 'required|max:74',
            'image' => 'required|file|max:1024',
            'company_name' => 'required|max:74',
            'content' => 'required|max:199'
        ]);

        $fileName = time() . request()->file('image')->getClientOriginalExtension();
        $path = request()->file('image')->storeAs('images/testimonials', $fileName, 'public');

        $testimonial = new Testimonial();
        $testimonial->name = request()->input('name');
        $testimonial->company_name = request()->input('company_name');
        $testimonial->content = request()->input('content');
        $testimonial->image = $path;
        $testimonial->save();

        return redirect()
            ->route('dashboard.testimonials.index')
            ->with('success', 'Testimonial Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
