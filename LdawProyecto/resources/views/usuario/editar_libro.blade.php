<!-- Formulario para editar un libros  -->

<h1>Editar Libro</h1>

<form action="{{ url('/usuario/'.$libro->id_libro)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('usuario.form')
</form>