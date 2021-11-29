<!-- Consultar reviews de otros usuarios -->
<h1>Review del libro</h1>
@csrf
<form action="{{ url('/review/.$libro->id_libro') }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    <label for="ID">ID de Usuario</label>
    <br>
    <input type="number" name="id_user" value="{{isset($libro->Editorial)?$libro->id_user:'' }}" id="">
    <br>
    <br>
    <label for="Comentario">Comentario</label>
    <br>
    <textarea id="Comentario" name="Comentario" value="{{isset($libro->Editorial)?$libro->Comentario:'' }}" rows="4"></textarea>
    <br>
    <br>
    <label for="Editorial">Calificación 1-10</label>
    <br>
    <input type="number" name="Calificacion" value="{{isset($libro->Editorial)?$libro->Calificacion:'' }}" id="">
    <br>
    <br>
    <input type="submit" value="Añadir">
    <br>
</form>
@include('review.form_review')