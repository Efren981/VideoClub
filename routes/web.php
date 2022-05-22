<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CintaController;
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

Route::get('socios', function () {
    return view('socios.socios');
});

Route::resource("socios",\App\Http\Controllers\SocioController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/cintas',CintaController::class);

Route::resource('/peliculas',PeliculaController::class);


