<?php

namespace App\Http\Controllers;
use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index()
    {
    $datos['usuarios']= Administrador::paginate(4);
    return view('administrador.usuarios', $datos);

    }


    public function create()
    {
        return view('administrador.crear_usuario');
    }


    public function edit($id_user)
    {
        $usuario=Administrador::findOrFail($id_user);
        return view('administrador.editar_usuario', compact('usuario'));
        // return response()->json($libro); 

    }


    public function store(Request $request)
    {
        $libro = request()->except('_token', 'enviar');
        Administrador::insert($libro);

        //  return response()->json($libro); 
        $datos['usuarios']= Administrador::paginate(7);
        return view('administrador.usuarios', $datos);
    }


    public function update(Request $request, $id) {
        $libro = request()->except(['_token', 'enviar','_method']);
        Administrador::where('id_user','=',$id)->update($libro);
        $datos['usuarios']= Administrador::paginate(7);
        return view('administrador.usuarios', $datos);

    }
    public function destroy($id){
        Administrador::destroy($id);
        return redirect('administrador');

    }
}
