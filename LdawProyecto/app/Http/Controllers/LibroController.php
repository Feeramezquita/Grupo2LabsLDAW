<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        return view('usuario.libros');
    }
    public function create()
    {
        return view('usuario.crear_libro');
    }
    public function edit()
    {
        return view('usuario.editar_libro');
    }
    public function store(Request $request)
    {
        $libro = request()->except('_token', 'enviar');
        // Libro::insert($libro);

        return response()->json($libro);
        
    }
}
