<!-- Formulario para crear un libro nuevo -->
<h1>Añadir Libro</h1>

<form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('usuario.form')
</form>