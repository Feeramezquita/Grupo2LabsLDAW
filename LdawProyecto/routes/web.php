<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LibroController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdministradorController;

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

Route::get('/review/create/{id_libro}', [ReviewController::class, 'create']);

// Con esta ruta las views dentro de "usuario" pueden accedes a todos los metodos del Controller
Route::resource('usuario', LibroController::class); 
Route::resource('review', ReviewController::class); 
Route::resource('administrador', AdministradorController::class); 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'getUser']);


