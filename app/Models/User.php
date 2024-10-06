<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Fields that can be mass assigned
    protected $fillable = [
        'username', // Add 'username' here
        'email',
        'password',
    ];

    // Optionally, you can hide sensitive fields
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
