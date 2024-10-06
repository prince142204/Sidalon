<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BaseController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // Add your shared functionality here
}
