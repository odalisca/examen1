<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoriosController;
use App\Http\Controllers\ContactosController;
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

Route::get('/', function () {
    return view('welcome');});



Route::get('/directorioinicio', [DirectoriosController::class , 'index'])->name('directorio');

Route::get('/directorio/crear', [DirectoriosController::class ,'crear'])->name('directorio.crear');

Route::get('/directorio/guardar', [DirectoriosController::class ,'guradar'])->name('directorio.guardar');

Route::get('/directorio/eliminar', [DirectoriosController::class ,'eliminar'])->name('directorio.eliminar');
