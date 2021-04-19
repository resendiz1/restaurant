<?php

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

Route::view('/add-platillos', 'admin.agregar-platillos')->name('platillos.create');
Route::view('/add-especialidades', 'admin.agregar-especialidades')->name('especialidades.create');