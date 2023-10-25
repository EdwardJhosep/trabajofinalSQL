<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/admin', function () {
    return view('admin');
});

use App\Http\Controllers\ProductosController;

Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
