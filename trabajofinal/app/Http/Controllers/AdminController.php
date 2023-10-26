<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin');
    }

    public function loginAdmin(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar iniciar sesión
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Si la autenticación es exitosa, redirigir a la página del menú del administrador
            return redirect()->route('menuadmin');
        }

        // Si la autenticación falla, redirigir de vuelta al formulario de inicio de sesión con un mensaje de error
        return redirect()->route('admin')->with('error', 'Credenciales incorrectas');
    }

    public function menuAdmin()
    {
        return view('menuadmin');
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
}
