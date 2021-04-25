<?php

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

Route::view('/', 'inicio')->name('home');
Route::view('/pedidos', 'admin.pedidos')->name('pedidos');
Route::view('/prepara', 'prepara-pedido')->name('prepara');





Route::delete('/add-platillo/{id}', [platilloController::class, 'delete'])->name('platillos.delete');

Route::post('/add-platillos', [platilloController::class, 'store'])->name('platillos.store');
Route::get('/add-platillos', [platilloController::class, 'show'])->name('platillos.create');
Route::get('/add-platillos/{id}/editando', [platilloController::class, 'edit'])->name('platillos.edit');
Route::patch('/add-platillos/{id}', [platilloController::class, 'update'])->name('platillo.update');