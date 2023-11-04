<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductoController;

// Rutas públicas
Route::view('/', 'welcome')->name('welcome');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');

// Rutas de administrador
Route::get('/admin', [AdminController::class, 'login'])->name('admin'); // Vista del formulario de inicio de sesión
Route::post('/admin', [AdminController::class, 'loginAdmin'])->name('admin.login.submit'); // Procesamiento del inicio de sesión
Route::get('/menuadmin', [AdminController::class, 'menuAdmin'])->name('menuadmin'); // Página del menú del administrador
Route::get('/agregar', [AdminController::class, 'agregar'])->name('agregar'); // Vista para agregar producto

// Rutas de productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/agregar', [ProductController::class, 'showProductForm'])->name('productos.agregar');
Route::post('/productos/agregar', [ProductController::class, 'addProduct'])->name('productos.guardar');
Route::get('/productos/editar/{id}', [ProductController::class, 'edit'])->name('productos.editar');
Route::put('/productos/actualizar/{id}', [ProductController::class, 'update'])->name('productos.actualizar');
Route::delete('/productos/eliminar/{id}', [ProductController::class, 'destroy'])->name('productos.eliminar');

// Rutas para mostrar productos y ofertas
Route::get('/producto', [ProductController::class, 'index3'])->name('producto');
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');

// Rutas para compras

Route::get('/venta/{productId}', [ProductoController::class, 'mostrarCompra'])->name('venta');
Route::post('/realizar_compra/{productId}', [ProductController::class, 'addVenta'])->name('realizar_compra');
// Rutas para cerrar sesión
Route::get('/logout', [AdminController::class, 'logout'])->name('my-logout');



// Rutas para mostrar productos y ofertas

Route::get('/ofertas', [ProductoController::class, 'ofertas'])->name('ofertas');
Route::get('/listar-ventas', 'AdminController@listarVentas')->name('listar_ventas');
Route::get('/detalle-producto/{productId}', 'ProductoController@detalleProducto')->name('detalle_producto');
