<label for="Titulo" class="form-label">Titulo del libro</label>
<input type="text" name="Titulo" value="{{ isset($libro->Titulo)?$libro->Titulo:'' }}" id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
<br>
<label for="Autor" class="form-label">Autor del libro</label>
<input type="text" name="Autor" value="{{ isset($libro->Autor)?$libro->Autor:'' }}" id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
<br>
<label for="AnoPublicacion" class="form-label">Año de publicacion</label>
<input type="number" name="AnoPublicacion" value="{{ isset($libro->AnoPublicacion)?$libro->AnoPublicacion:'' }}"id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
<br>
<label for="Paginas" class="form-label">No. Paginas</label>
<input type="number" name="Paginas" value="{{isset($libro->Paginas)?$libro->Paginas:'' }}" id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
<br>
<label for="Editorial" class="form-label">Editorial</label>
<input type="text" name="Editorial" value="{{isset($libro->Editorial)?$libro->Editorial:'' }}" id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
<br>
<label for="LugarPublicacion" class="form-label">Lugar de publicacion</label>
<input type="text" name="LugarPublicacion" value="{{isset($libro->LugarPublicacion)?$libro->LugarPublicacion:'' }}" id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
<br>
<label for="Genero" class="form-label">Genero</label>
<input type="text" name="Genero" value="{{ isset($libro->Genero)?$libro->Genero:'' }}"id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
<br>
<input type="submit" value="Guardar" class="btn btn-success">
<br>