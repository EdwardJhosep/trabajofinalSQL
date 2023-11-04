<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'correo', 
        'direccion', 
        'nombre', // Lista de campos que puedes llenar
        // Otros campos si los tienes
    ];
    
}
