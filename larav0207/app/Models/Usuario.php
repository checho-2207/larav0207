<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'names',
        'ide',
        'number',
        'adress',
        'email',
        'password',
        'confirmacion',
        'rol',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    
}

