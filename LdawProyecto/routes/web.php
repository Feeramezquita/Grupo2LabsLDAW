<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/usuario/libros', function () {
//     return view('usuario.libros');
// });

//Route::get('/usuario/createLibro', [LibroController::class, 'store']);
// Route::get('/usuario/editarLibro', [UserController::class, 'edit']);

// Con esta ruta las views dentro de "usuario" pueden accedes a todos los metodos dentro de UserController
Route::resource('usuario', LibroController::class); 
Route::resource('review', ReviewController::class); 

Route::resource('administrador', AdministradorController::class); 
// Route::get('/usuario/reviewLibros', function () {
//     return view('usuario.review_libros');
// });
// Route::get('/usuario/crearReviewLibro', function () {
//     return view('usuario.crear_review_libro');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
