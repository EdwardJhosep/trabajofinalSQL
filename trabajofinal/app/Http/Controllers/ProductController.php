<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Venta;
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
    



    public function index()
    {
        $products = Product::all();
        return view('productos', compact('products'));

    }
    public function index3()
    {
        $products = Product::all();
        return view('producto', compact('products'));

    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('editar', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

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

        $product->update($request->all());

        return redirect()->route('producto')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect()->route('producto')->with('success', 'Producto eliminado con éxito.');
        } else {
            return redirect()->route('producto')->with('error', 'No se pudo encontrar el producto.');
        }
    }
    public function addVenta(Request $request, $productId)
    {
        // Valida los datos ingresados por el usuario (correo, dirección, nombre u otros campos necesarios)
        $request->validate([
            'correo' => 'required|string|email',
            'direccion' => 'required|string',
            'nombre' => 'required|string',
        ]);
    
        // Aquí puedes realizar la lógica para guardar la venta en la base de datos
        // Puedes utilizar los datos validados y otros campos necesarios
        $correoUsuario = $request->input('correo');
        $direccionUsuario = $request->input('direccion');
        $nombreUsuario = $request->input('nombre');
    
        // Crea una nueva venta
        $venta = new Venta();
        $venta->correo = $correoUsuario;
        $venta->direccion = $direccionUsuario;
        $venta->nombre = $nombreUsuario;
        $venta->product_id = $productId; // Asigna el ID del producto
    
        // Puedes agregar más campos de la venta si es necesario
    
        // Guarda la venta en la base de datos
        $venta->save();
    
        // Redirige al usuario a la página de confirmación de compra o a donde desees
        return redirect()->route('venta', ['productId' => $productId])->with('success', 'Compra realizada con éxito.');

    }
    
}
