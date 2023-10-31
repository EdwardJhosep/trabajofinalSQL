<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function showLoginForm2()
    {
        return view('welcome');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'email' => 'required|email|unique:clientes',
            'password' => 'required|string|min:8',
            'telefono' => 'required|string',
        ]);

        $cliente = new Clientes;
        $cliente->nombre = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request->email;
        $cliente->password = Hash::make($request->password);
        $cliente->telefono = $request->telefono;
        $cliente->save();

        // Puedes agregar aquí la lógica de autenticación (inicio de sesión) si es necesario

        return redirect('login'); // Redirige al inicio o a donde desees
    }
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // El usuario se ha autenticado exitosamente
        return redirect('venta'); // Redirige a la página de inicio del usuario
    }

    // Si las credenciales no son válidas, vuelve al formulario de inicio de sesión con un mensaje de error
    return back()->withErrors(['email' => 'Credenciales incorrectas']);
}

}
