<?php   
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends AppBaseController // Ensure this extends your Base Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('login'); // This points to your login view
    }

    // Handle login form submission
    public function login(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Successful login, redirect to user home page
            return redirect()->route('user.home'); // Adjust this route to match the defined route in web.php
        }

        // Redirect back with error if login fails
        return redirect()->back()->withErrors(['login' => 'The provided credentials do not match our records.']);
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login page after logout
    }
}
