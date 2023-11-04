<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta; // Asegúrate de importar el modelo Venta

class CompraController extends Controller
{
    public function addVenta(Request $request)
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

        // Puedes agregar más campos de la venta si es necesario

        // Guarda la venta en la base de datos
        $venta->save();

        // Redirige al usuario a la página de confirmación de compra o a donde desees
        return redirect()->route('venta')->with('success', 'Compra realizada con éxito.');
    }
}
