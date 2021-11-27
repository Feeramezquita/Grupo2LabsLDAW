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

Route::get('/usuario/libros', function () {
    return view('usuario.libros');
});

Route::get('/usuario/crearLibro', function () {
    return view('usuario.crear_libro');
});

Route::get('/usuario/editarLibro', function () {
    return view('usuario.editar_libro');
});

Route::get('/usuario/reviewLibros', function () {
    return view('usuario.review_libros');
});
Route::get('/usuario/crearReviewLibro', function () {
    return view('usuario.crear_review_libro');
});
