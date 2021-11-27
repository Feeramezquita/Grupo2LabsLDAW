<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        
    }

    public function create(){
        return view('usuario.crear_libro');
    }
    public function edit(){
        return view('usuario.editar_libro');
    }
}
