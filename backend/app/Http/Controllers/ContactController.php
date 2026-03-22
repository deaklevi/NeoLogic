<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'company' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // 1. Értesítés NEKED
        Mail::to('neologicsupport@gmail.com')->send(new ContactMail($validated, true));

        // 2. Visszaigazolás az ÜGYFÉLNEK
        Mail::to($validated['email'])->send(new ContactMail($validated, false));

       return response()->json([
        'success' => true,
        'message' => 'Email elküldve'
    ]);
    }
}
