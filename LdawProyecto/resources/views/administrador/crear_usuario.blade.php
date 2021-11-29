<!-- Formulario para crear un usuario -->
<h1>Añadir Usuarios</h1>

<form action="{{ url('/administrador') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('administrador.form')
</form>