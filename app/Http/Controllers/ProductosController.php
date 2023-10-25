<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        // Puedes agregar lógica adicional aquí si es necesario
        return view('productos');
    }
}
