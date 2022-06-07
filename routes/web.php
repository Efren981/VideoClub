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

Route::get('/', function () {
    return view('welcome');
});

Route::resource("socios",\App\Http\Controllers\SocioController::class);

Route::resource("registro_personas",\App\Http\Controllers\PersonaController::class);

Route::resource("registro_director",\App\Http\Controllers\DirectorController::class);

Route::resource("registro_genero",\App\Http\Controllers\GeneroController::class);

Route::resource('cintas',\App\Http\Controllers\CintaController::class);

Route::resource('peliculas',\App\Http\Controllers\PeliculaController::class);

Route::resource("devoluciones",\App\Http\Controllers\DevolucionController::class);

Route::resource('prestamos',\App\Http\Controllers\PrestamoController::class);

Route::resource("actores",\App\Http\Controllers\ActorController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
