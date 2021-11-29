<!-- Mostar lista de libros Consulta-->
<a href="{{ url('/usuario/create') }}">Nuevo Libro</a>

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
        <a href="{{ url('/usuario/'.$libro->id_libro.'/edit') }}">Editar</a>
      </td>
      <td>
      <a href="{{ url('/review/'.$libro->id_libro.'/edit') }}">Review</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>