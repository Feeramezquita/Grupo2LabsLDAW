<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Libro;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        //
    }
    public function show($id_libro)
    {
        $libro = Review::select('review.id_review', 'users.name', 'Comentario', 'Calificacion')
        ->join('users', 'users.id_user', '=', 'review.id_user')
        ->where('id_libro', '=', $id_libro)
        ->get();
        return view('review.review', compact('libro'));
    }


    public function create($id_libro)
    {
        return view('review.crear_review', ['id' => $id_libro]);
        // return view('review.crear_review');

    }


    public function edit($id_libro)
    {

        $libro = Review::select('review.id_review', 'users.name', 'Comentario', 'Calificacion')->join('users', 'users.id_user', '=', 'review.id_user')->where('id_libro', '=', $id_libro)->get();

        // $datos['reviews'] = $libro;
        // $libro=Libro::findOrFail($id_libro);
        return view('review.review', compact('libro'));

        // return response()->json($libro); 

    }


    public function store(Request $request)
    {
        $review = [
            "id_libro" => $request->id_libro,
            "id_user" => $request->id_user,
            "Comentario" => $request->Comentario,
            "Calificacion" => $request->Calificacion
        ];
        $id =  $request->id_libro;
        $libro = Review::select('review.id_review', 'users.name', 'Comentario', 'Calificacion')->join('users', 'users.id_user', '=', 'review.id_user')->where('id_libro', '=', $id)->get();
        Review::insert($review);
        // Libro::where('id_libro', '=', $id)->insert($review);
        // // Review::select($libro);
        // return response()->json($libro);
        return view('review.review', compact('libro'));
        // return view('review.review', ['id' => 'id_libro'], compact('libro'));

    }


    public function update(Request $request, $id)
    {
        $libro = request()->except('_token', '_method');
        // // Review::insert($libro);
        Libro::where('id_libro', '=', $id)->update($libro);
        // // Review::select($libro);
        return response()->json($libro);
        // return view('review.review', compact('libro'));
    }
}
