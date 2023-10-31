<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NuevoCliente extends Model
{
    protected $table = 'clientes'; // Nombre de la tabla en la base de datos
    protected $fillable = ['nombre', 'correo', 'contrasena', 'direccion', 'telefono'];

    // Resto de tus definiciones y métodos del modelo, si los tienes.
}
