<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $users = User::where('id', '!=', auth()->id())->paginate(10);

        return response()
            ->view('dashboard.admin.users.index', [
                'users' => $users
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()
            ->view('dashboard.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): RedirectResponse
    {
        request()->validate([
            'name' => 'required|max:74',
            'email' => 'required|max:149|email',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|max:74',
            'image' => 'required|file|max:1024|mimes:png,jpg,jpeg,webp',
        ]);

        $fileName = time() . request()->file('image')->getClientOriginalName();
        $path = request()->file('image')->storeAs('images/users', $fileName, 'public');

        $user = new User();
        $user->name = request()->input('name');
        $user->email = request()->input('email');
        $user->password = request()->input('password');
        $user->role = request()->input('role');
        $user->image = $path;
        $user->save();

        return redirect()
            ->route('dashboard.users.index')
            ->with('success', 'User Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
