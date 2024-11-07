<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable 
{
    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'Nombre',
        'Apellido',
        'password',
        'Correo',
        'Tipo de usuario',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ]; 
}
