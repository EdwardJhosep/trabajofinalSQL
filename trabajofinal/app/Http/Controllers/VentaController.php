<?php

namespace App\Http\Controllers;
use App\Models\Venta; // Importa el modelo Venta al comienzo del archivo

use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function mostrarFormularioVenta()
    {
        return view('venta');
    }

    public function guardarVenta(Request $request)
    {
        // Valida y guarda los datos de la venta en la base de datos
        // Puedes acceder a los datos del formulario usando $request
        // Ejemplo: $request->input('cliente_id');
        
        // Aquí debes implementar la lógica para guardar la venta en la base de datos
        // Por ejemplo:
        // Venta::create($request->all());

        return redirect('/venta')->with('success', 'Venta guardada exitosamente');
    }
    use App\Models\Venta; // Asegúrate de importar el modelo Venta


    public function mostrarVentas()
    {
        $ventas = Venta::all(); // Obtener todas las ventas
        return view('menuadmin', compact('ventas'));
    }
    
    
}
