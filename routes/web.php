<?php

use App\Http\Controllers\extraController;
use App\Http\Controllers\ingredienteController;
use App\Http\Controllers\platilloController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'inicio')->name('home');
Route::view('/pedidos', 'admin.pedidos')->name('pedidos');
Route::view('/prepara', 'prepara-pedido')->name('prepara');
Route::view('/ad-extra', 'admin.ingredientes-extra')->name('extra');

// Route::post('/preparar-pedido/{id}', [platilloController::class, 'prueba'])->name('ingrediente');




// Rutas que ayudan a el CRUD de los platillos
Route::delete('/add-platillo/{id}', [platilloController::class, 'delete'])->name('platillos.delete');
Route::post('/add-platillos', [platilloController::class, 'store'])->name('platillos.store');
Route::get('/add-platillos', [platilloController::class, 'show'])->name('platillos.create');
Route::get('/add-platillos/{id}/editando', [platilloController::class, 'edit'])->name('platillos.edit');
Route::patch('/add-platillos/{id}', [platilloController::class, 'update'])->name('platillo.update');
// Rutas que ayudan a el CRUD de los platillos




//Rutas de los ingredientes EXTRA
Route::get('/add-platillo/{id}', [extraController::class, 'create'])->name('extra.create');
Route::post('/add-platillo', [extraController::class, 'store'])->name('extra.store');
//Rutas de los ingredientes extra




//Rutas de los ingredientes normales
Route::get('/add-platillo/normal/{identificador}/', [extraController::class, 'create'])->name('ingrediente.create');
//Rutas de los ingredientes normales


Route::get('/', [platilloController::class, 'platillo_normal'])->name('home');
