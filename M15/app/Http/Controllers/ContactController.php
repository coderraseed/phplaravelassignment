<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email
        Mail::raw($validatedData['message'], function ($message) use ($validatedData) {
            $message->to('contact@example.com')
                    ->subject('Contact Form Submission')
                    ->from($validatedData['email'], $validatedData['name']);
        });

        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
