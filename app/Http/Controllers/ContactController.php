<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends BaseController
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Handle form data (e.g., save to database or send email)
        return back()->with('success', 'Message sent successfully!');
    }
}
