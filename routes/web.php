<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tienda\Ventas;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\Tienda\Carrito;
use App\Http\Controllers\Tienda\Catalogo;
use App\Http\Controllers\Tienda\Clientes;
use App\Http\Controllers\Tienda\Nosotros;
use App\Http\Controllers\Tienda\Usuarios;
use App\Http\Controllers\Tienda\Productos;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
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

Route::get('/usuarios/listado', [RegisteredUserController::class, 'index'])->name('users.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Rutas para Usuarios
Route::get('/usuarios/listado', [Usuarios::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_usuarios');


/*---------------------RUTAS PRODUCTOS--------------------------------------*/
Route::get('/productos/listado', [Productos::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_productos');

//Formulario para agregar productos
Route::get('/productos/registrar', [Productos::class, 'form_productos']
)->middleware(['auth', 'verified'])->name('formulario_agregar_producto');
//Agregar productos por Admin
Route::post('/productos/crear', [Productos::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_producto');

//Formulario ruta para editar productos
Route::get('/productos/editar/{id}', [Productos::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_prodform');
//Editar productos
Route::post('/productos/edicion/{id}', [Productos::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_producto');
//Eliminar productos por el admin
Route::get('/productos/eliminar/{id}', [Productos::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_prod');
//
/*--------------------------------------------------------------------------*/

/*---------------------------RUTAS USUARIOS---------------------------------*/
Route::get('/usuarios/listado', [Usuarios::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_usuarios');
//Formulario ruta para editar productos
Route::get('/usuarios/editar/{id}', [Usuarios::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_usuform');
//Editar productos
Route::post('/usuarios/edicion/{id}', [Usuarios::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_usuario');
//Eliminar productos por el admin
Route::get('/usuarios/eliminar/{id}', [Usuarios::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_usu');

/*-------------------------------------------------------------------------

/*---------------------------RUTAS VENTAS---------------------------------*/
Route::get('/ventas/listado', [Ventas::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_clientes');
/*-------------------------------------------------------------------------


/*---------------------------RUTAS PARA CRUD CLIENTES---------------------------------*/
Route::get('/clientes/listado', [Clientes::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_clientes');
/*-------------------------------------------------------------------------



/*---------------------RUTAS CATALOGO SIN AUTENTICACION--------------------------------------*/
Route::get('/catalogo/listado', [Catalogo::class, 'index']
)->middleware(['guest'])->name('listado_catalogo');
/*--------------------------------------------------------------------------*/

/*---------------------RUTAS CARRITO--------------------------------------*/
Route::get('/carrito/listado', [Carrito::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_carrito');

Route::post('cart/add', [App\Http\Controllers\CarritoController::class, 'add'])->name('add');
Route::get('cart/checkout', [App\Http\Controllers\CarritoController::class, 'checkout'])->name('checkout');
Route::get('cart/clear', [App\Http\Controllers\CarritoController::class, 'clear'])->name('clear');
Route::post('cart/removeitem', [App\Http\Controllers\CarritoController::class, 'removeItem'])->name('removeitem');


/*--------------------------------------------------------------------------*/

/*---------------------Nosotros--------------------------------------*/
Route::get('/nosotros/listado', [Nosotros::class, 'index']
)->middleware(['guest'])->name('listado_nosotros');
/*--------------------------------------------------------------------------*/




require __DIR__.'/auth.php';
