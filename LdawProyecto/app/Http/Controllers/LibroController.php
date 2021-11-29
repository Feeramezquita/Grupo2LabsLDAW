<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $datos['libros']= Libro::paginate(7);
        return view('usuario.libros', $datos);

    }


    public function create()
    {
        return view('usuario.crear_libro');
    }


    public function edit($id_libro)
    {
        $libro=Libro::findOrFail($id_libro);
        return view('usuario.editar_libro', compact('libro'));
        // return response()->json($libro); 

    }


    public function store(Request $request)
    {
        $libro = request()->except('_token', 'enviar');
        Libro::insert($libro);

        //  return response()->json($libro); 
        $datos['libros']= Libro::paginate(7);
        return view('usuario.libros', $datos);
    }


    public function update(Request $request, $id) {
        $libro = request()->except(['_token', 'enviar','_method']);
        Libro::where('id_libro','=',$id)->update($libro);
        $datos['libros']= Libro::paginate(7);
        return view('usuario.libros', $datos);

    }
}

