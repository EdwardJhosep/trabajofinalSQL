<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Importa la clase Producto

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Obtén todos los productos

        return view('productos', ['productos' => $productos]);
    }
   
public function mostrarCompra($productId)
{
    $product = Producto::find($productId); // Aquí se obtiene el producto a partir del parámetro en la URL

    return view('venta', ['product' => $product]);
}

    
    
public function ofertas()
{
    $productos = Producto::where('precio_original', '>', 'precio_oferta')->get();
    return view('ofertas', ['productos' => $productos]);
}

public function detalleProducto($productId)
{
    $producto = Producto::find($productId);

    return view('menuadmin', ['producto' => $producto]);
}


}
