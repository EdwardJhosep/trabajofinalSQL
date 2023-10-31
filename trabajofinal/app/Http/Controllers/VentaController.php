<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\NuevoCliente;
use App\Models\Producto;

class VentaController extends Controller
{
    public function confirmarCompra(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'cantidad' => 'required|integer|min:1',
            'producto_id' => 'exists:productos,id',
            'cliente_id' => 'exists:clientes,id', // Valida que el cliente exista en la tabla de clientes
        ]);

        // Obtener el producto y cliente
        $producto = Producto::find($request->input('producto_id'));
        $cliente = NuevoCliente::find($request->input('cliente_id')); // Usar find en lugar de where

        // Registrar la venta en la base de datos
        $venta = new Venta();
        $venta->producto_id = $producto->id;
        $venta->cantidad = $request->input('cantidad');
        $venta->cliente_id = $cliente->id; // Asociar la venta con el cliente
        $venta->save();

        // Puedes redirigir al usuario a una página de confirmación u otra acción que desees.
        return redirect()->route('welcome');
    }
}
