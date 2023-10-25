<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de importar el modelo Producto correctamente

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'precio_original' => 'required',
            'precio_oferta' => 'required',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index');
    }
}
