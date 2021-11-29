<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Libro;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        
    }


    public function create()
    {
        return view('review.crear_review');
        
    }


    public function edit($id_libro)
    {
       
        $libro=Review::select('review.id_review','users.name', 'Comentario', 'Calificacion')->join('users', 'users.id_user', '=', 'review.id_user')->where('id_libro', '=', $id_libro)->get();
        
        // $datos['reviews'] = $libro;
        // $libro=Libro::findOrFail($id_libro);
        return view('review.review', compact('libro'));

        // return response()->json($libro); 

    }


    public function store(Request $request)
    {
        //        
    }


    public function update(Request $request)
    {
        // 
    }
}
