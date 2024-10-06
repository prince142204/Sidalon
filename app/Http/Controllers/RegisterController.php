<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends AppBaseController // Ensure this extends your Base Controller
{
    // Show registration form
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Handle registration request
    public function register(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'username' => 'required|string|unique:users|max:255',
            'email' => 'required|string|email|unique:users|max:255', // Add email validation
            'password' => 'required|string|min:6|confirmed',
        ]);
    
User::create([
    'username' => $request->username,
    'email' => $request->email,
    'password' => Hash::make($request->password),
]);

    
        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }
}
