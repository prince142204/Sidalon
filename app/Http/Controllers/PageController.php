<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function drink()
    {
        return view('drink');
    }

    public function food()
    {
        return view('food');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard() // Corrected typo from 'deshboard' to 'dashboard'
    {
        return view('dashboard.index'); // Adjust if your view structure is different
    }
}
