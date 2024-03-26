<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(): Response
    {
        $headTitle = 'Contact';

        return response()
            ->view('contact.index', compact('headTitle'));
    }

    public function store(): RedirectResponse
    {
        request()->validate([
            'name' => 'required|max:74',
            'email' => 'required|email',
            'subject' => 'required|max:74',
            'message' => 'required'
        ]);

        $name = request()->input('name');
        $email = request()->input('email');
        $subject = request()->input('subject');
        $message = request()->input('message');

        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new SendEmail($subject, $name, $message, $email));;

        return redirect()
            ->route('contact.index')
            ->with('success', 'Your message has been sent successfully!');
    }
}
