<!-- Mostar lista de libros Consulta-->
<a href="{{ url('/administrador/create') }}">Nuevo Usuario</a>

<table class="table table-light">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre del usuario</th>
      <th scope="col">Correo del usuario</th>
      <th scope="col">Rol</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $usuarios as  $usuario)
    <tr>
      <td>{{$usuario->id_user}}</td>
      <td>{{$usuario->name}}</td>
      <td>{{$usuario->correo}}</td>
      <td>{{$usuario->rol}}</td>
      <td>
        <a href="{{ url('/administrador/'.$usuario->id_user.'/edit') }}">Editar</a>
      </td>
      <td>
    </tr>
    @endforeach
  </tbody>
</table>