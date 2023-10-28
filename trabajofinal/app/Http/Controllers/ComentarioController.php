<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentarioController extends Controller
{
    public function showForm()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'comentario' => 'required',
        ]);

        Comentario::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'comentario' => $request->input('comentario')
        ]);

        return redirect()->route('contacto')->with('success', 'Comentario enviado correctamente.');
    }
}
