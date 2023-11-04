<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Venta;
use App\Models\Producto;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin');
    }

    public function loginAdmin(Request $request)
    {
        if ($request->email === 'juanantee@gmail.com' && $request->password === '123') {
            // Si las credenciales coinciden, inicia sesión
            Auth::loginUsingId(1); // Reemplaza "1" con el ID del usuario que deseas autenticar
            return redirect()->route('menuadmin');
        }

        // Si las credenciales no coinciden, redirige al formulario de inicio de sesión con un mensaje de error
        return redirect()->route('admin')->with('error', 'Credenciales incorrectas');
    }

    public function menuAdmin()
    {
        $ventas = Venta::all();

        // Nuevo: Obtén el producto asociado a cada venta
        foreach ($ventas as $venta) {
            $venta->producto = Producto::find($venta->product_id);
        }

        // Nuevo: Pasa las ventas y productos a la vista
        return view('menuadmin', ['ventas' => $ventas]);
    }

    public function agregar()
    {
        // Lógica para la vista de agregar producto (si es necesario)
        return view('agregar');
    }

    public function producto()
    {
        // Lógica para la vista de editar producto (si es necesario)
        return view('producto');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome')
            ->withHeaders([
                'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
                'Pragma' => 'no-cache',
                'Expires' => 'Sat, 01 Jan 2000 00:00:00 GMT',
            ]);
    }

    public function listarVentas()
    {
        $ventas = Venta::all();
        return view('listar_ventas', ['ventas' => $ventas]);
    }
    public function detalleProducto($productId)
{
    $producto = Producto::find($productId);

    if ($producto) {
        return view('detalle_producto', ['producto' => $producto]);
    } else {
        return redirect()->route('productos')->with('error', 'El producto no se encontró.');
    }
}

}
