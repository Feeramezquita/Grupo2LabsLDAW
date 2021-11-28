<!-- Formulario para crear un libro nuevo -->
<h1>Añadir Libro</h1>

<form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="ID">ID</label>
    <input type="number" name="ID" id="">
    <br>
    <label for="Titulo">Titulo del libro</label>
    <input type="text" name="Titulo" id="">
    <br>
    <label for="Autor">Autor del libro</label>
    <input type="text" name="Autor" id="">
    <br>
    <label for="AnoPublicacion">Año de publicacion</label>
    <input type="number" name="AnoPublicacion" id="">
    <br>
    <label for="Paginas">No. Paginas</label>
    <input type="number" name="Paginas" id="">
    <br>
    <label for="Editorial">Editorial</label>
    <input type="text" name="Editorial" id="">
    <br>
    <label for="LugarPublicacion">Lugar de publicacion</label>
    <input type="text" name="LugarPublicacion" id="">
    <br>
    <label for="Genero">Genero</label>
    <input type="number" name="Genero" id="">
    <br>
    <input type="submit" value="Añadir" >
    <br>
</form>