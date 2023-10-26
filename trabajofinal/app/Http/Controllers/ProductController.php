<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product; // Asegúrate de importar el modelo Product

class ProductController extends Controller
{
    // Otros métodos del controlador

    public function addProduct(Request $request)
    {
        // Valida los datos ingresados por el usuario
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' => 'required|string',
            'precio_original' => 'required|numeric',
            'precio_oferta' => 'required|numeric',
            'existencias' => 'required|integer',
            'categoria' => 'required|string',
            'proveedor' => 'required|string',
        ]);

        // Crea un nuevo producto con los datos proporcionados
        $product = new Product([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'precio_original' => $request->input('precio_original'),
            'precio_oferta' => $request->input('precio_oferta'),
            'existencias' => $request->input('existencias'),
            'categoria' => $request->input('categoria'),
            'proveedor' => $request->input('proveedor'),
        ]);

        // Guarda el producto en la base de datos
        $product->save();

        // Redirige a una página de éxito o cualquier otra acción que desees
        return redirect()->route('agregar')->with('success', 'Producto agregado con éxito.');
    }
    





    public function editProduct($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }

        return view('productos.editar', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }

        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' => 'required|string',
            'precio_original' => 'required|numeric',
            'precio_oferta' => 'required|numeric',
            'existencias' => 'required|integer',
            'categoria' => 'required|string',
            'proveedor' => 'required|string',
        ]);

        $product->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'precio_original' => $request->input('precio_original'),
            'precio_oferta' => $request->input('precio_oferta'),
            'existencias' => $request->input('existencias'),
            'categoria' => $request->input('categoria'),
            'proveedor' => $request->input('proveedor'),
        ]);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }

        $product->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito.');
    }
}
