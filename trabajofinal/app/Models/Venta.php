<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $fillable = [
        'producto_id',
        'cantidad',
        'cliente_id', // Cambiar a 'cliente_id'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(NuevoCliente::class, 'cliente_id', 'id'); // Cambiar a 'cliente_id'
    }
}
