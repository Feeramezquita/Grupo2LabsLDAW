<!-- Mostar lista de libros Consulta-->
@extends('layouts.app')
@section('content')
<div class="container">

<a href="{{ url('/usuario/create') }}" class="btn btn-primary">Nuevo Libro</a>
<br>
<br>
<div class="table-responsive">
<table class="table table-light">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo del libro</th>
      <th scope="col">Autor del libro</th>
      <th scope="col">Año de publicacion</th>
      <th scope="col">No. Paginas</th>
      <th scope="col">Editorial</th>
      <th scope="col">Lugar de publicacion</th>
      <th scope="col">Genero</th>
      <th scope="col">Editar</th>
      <th scope="col">Review</th>
    </tr>
  </thead>
  <tbody>
    @foreach($libros as $libro)
    <tr>
      <td>{{$libro->id_libro}}</td>
      <td>{{$libro->Titulo}}</td>
      <td>{{$libro->Autor}}</td>
      <td>{{$libro->AnoPublicacion}}</td>
      <td>{{$libro->Paginas}}</td>
      <td>{{$libro->Editorial}}</td>
      <td>{{$libro->LugarPublicacion}}</td>
      <td>{{$libro->Genero}}</td>
      <td>
        <a href="{{ url('/usuario/'.$libro->id_libro.'/edit') }}" class="btn btn-success">Editar</a>
      </td>
      <td>
      <a href="{{ url('/review/'.$libro->id_libro.'/edit') }}" class="btn btn-primary">Review</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div >
</div >
@endsection