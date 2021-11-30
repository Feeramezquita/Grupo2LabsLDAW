<!-- Formulario para crear un nuevo review del libro -->

<h1>Añadir review</h1>

<form action="{{ url('/review')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="ID">ID de Usuario</label >
    <br>
    <input type="number" name="id_user" value="{{isset($libro->Editorial)?$libro->id_user:'' }}" id="">
    <br>
    <br>
    <input type="hidden" name="id_libro" value="{{$id}}" id="">
    <label for="Comentario">Comentario</label>
    <br>
    <textarea id="Comentario" name="Comentario" value="{{isset($libro->Editorial)?$libro->Comentario:'' }}" rows="4"></textarea>
    <br>
    <br>
    <label for="Editorial">Calificación 1-10</label >
    <br>
    <input type="number" name="Calificacion" value="{{isset($libro->Editorial)?$libro->Calificacion:'' }}" id="">
    <br>
    <br>
    <input type="submit" value="Añadir">
    <br>
    <br>
</form>
<a href="{{ url('/usuario/')}}">Regresar</a>
