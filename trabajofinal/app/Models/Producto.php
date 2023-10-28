<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'precio_original',
        'precio_oferta',
        'existencias',
        'categoria',
        'proveedor',
    ];
    
}
