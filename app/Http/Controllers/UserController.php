<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends AppBaseController // Extending from AppBaseController
{
    // Show the user home page
    public function show()
    {
        return view('user.home'); // Make sure this points to your user home blade file
    }

    // Handle user login
    public function login(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (auth()->attempt($request->only('email', 'password'))) {
            // Redirect to the intended page after login
            return redirect()->intended('user/home');
        }

        // If login fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle user logout
    public function logout()
    {
        auth()->logout(); // Log the user out
        return redirect('/'); // Redirect to the homepage or login page
    }

    // Optionally, you can add more methods for additional functionalities
}
