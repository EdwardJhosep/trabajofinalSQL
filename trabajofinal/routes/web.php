<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pr;

// Rutas públicas
Route::view('/', 'welcome')->name('welcome');
Route::view('/ofertas', 'ofertas')->name('ofertas');
Route::view('/contacto', 'contacto')->name('contacto');

// Rutas de administrador
Route::get('/admin', [AdminController::class, 'login'])->name('admin'); // Vista del formulario de inicio de sesión
Route::post('/admin', [AdminController::class, 'loginAdmin'])->name('admin.login.submit'); // Procesamiento del inicio de sesión
Route::get('/menuadmin', [AdminController::class, 'menuAdmin'])->name('menuadmin'); // Página del menú del administrador

Route::get('/menuadmin', [AdminController::class, 'menuAdmin'])->name('menuadmin'); // Página del menú del administrador
Route::get('/agregar', [AdminController::class, 'agregar'])->name('agregar'); // Vista para agregar producto



Route::post('/productos/agregar', 'ProductController@addProduct')->name('productos.agregar');

use App\Http\Controllers\ProductController;

// Ruta para mostrar el formulario de agregar productos
Route::get('/productos/agregar', [ProductController::class, 'showProductForm'])->name('productos.agregar');

Route::post('/productos/agregar', [ProductController::class, 'addProduct'])->name('productos.guardar');




Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');
Route::get('/productos/editar/{id}', [ProductController::class, 'edit'])->name('productos.editar');
Route::put('/productos/actualizar/{id}', [ProductController::class, 'update'])->name('productos.actualizar');


//menus 
Route::get('/productos', [ProductController::class, 'index'])->name('productos');

Route::get('/producto', [ProductController::class, 'index3'])->name('producto');


// editar
Route::put('/productos/actualizar/{id}', [ProductController::class, 'update'])->name('productos.actualizar');
Route::delete('/productos/eliminar/{id}', [ProductController::class, 'destroy'])->name('productos.eliminar');
//cerrar sesion 
// Ruta para cerrar sesión
Route::get('/logout', 'AdminController@logout')->name('logout');


use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::get('/ofertas', [ProductoController::class, 'ofertas'])->name('ofertas');
Route::get('/venta/{id}', [ProductoController::class, 'mostrarCompra'])->name('venta');




use App\Http\Controllers\AuthController;
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/welcome', [AuthController::class, 'showLoginForm2'])->name('welcome');

Route::get('/venta', [VentaController::class, 'mostrarFormularioVenta'])->name('formulario_venta');
Route::post('/guardar-venta', [VentaController::class, 'guardarVenta'])->name('guardar_venta');
Route::get('/ventas', [VentaController::class, 'mostrarVentas'])->name('mostrar_ventas');