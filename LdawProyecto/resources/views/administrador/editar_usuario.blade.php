<!-- Formulario para editar un libros  -->

<h1>Editar Libro</h1>

<form action="{{ url('/administrador/'.$usuario->id_user)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('administrador.form')
</form>