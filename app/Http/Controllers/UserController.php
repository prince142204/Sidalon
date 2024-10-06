<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends AppBaseController // Extending from AppBaseController
{
    public function show()
    {
        return view('user.home'); // Make sure this points to your user home blade file
    }