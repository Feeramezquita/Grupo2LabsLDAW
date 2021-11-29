<!-- Formulario para crear un nuevo review del libro -->

<h1>Añadir review</h1>

<form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="ID"  class="form-label">ID</label>
    <br>
    <input type="number" name="id_review" id="id_review">
    <br>
    <label for="id_libro"  class="form-label">ID libro</label>
    <br>
    <input type="text" name="id_libro" id="id_libro">
    <br>
    <label for="Comentario"  class="form-label">Comentario</label>
    <br>
    <textarea id="Comentario" name="Comentario" rows="4" ></textarea>
    <br>
    <label for="Favorito"  class="form-label">Favorito</label>
    <br>
    <select name="Favorito" id="Favorito">
    <option value="Si">Si</option>
    <option value="No">No</option>
    </select>
    <br>
    <label for="Calificacion">Calificación</label>
    <br>
    <select name="Calificacion" id="Calificacion">
    <option value="1">★</option>
    <option value="2">★★</option>
    <option value="3">★★★</option>
    <option value="4">★★★★</option>
    <option value="5">★★★★★</option>
    </select>
    <br>
    <input type="submit" value="Añadir" >
    <br>
</form>