<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/producto1', function () {
    return view('producto1');
});