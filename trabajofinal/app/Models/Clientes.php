<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Clientes extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'clientes';

    protected $fillable = [
        'nombre', 'direccion', 'email', 'password', 'telefono',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
