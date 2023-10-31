<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NuevoCliente;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        // Valida y almacena los datos en la base de datos
        $data = $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|email|unique:Clientes',
            'contrasena' => 'required|min:6',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string',
        ]);

        // Crea un nuevo cliente y guarda los datos en la base de datos
        $cliente = new NuevoCliente();
        $cliente->nombre = $data['nombre'];
        $cliente->correo = $data['correo'];
        $cliente->contrasena = bcrypt($data['contrasena']);
        $cliente->direccion = $data['direccion'];
        $cliente->telefono = $data['telefono'];
        $cliente->save();

        return view('productos');
    }
}
