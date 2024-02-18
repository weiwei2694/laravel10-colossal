<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('auth.login');
    }

    public function store(): RedirectResponse
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = request()->only('email', 'password');
        if (!auth()->attempt($credentials)) {
            return back()->withErrors(['email' => 'Email or password wrong'])->onlyInput('email');
        }

        request()->session()->regenerate();
        return redirect()->intended('dashboard');
    }

    public function destroy(): RedirectResponse
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect(RouteServiceProvider::HOME);
    }
}
