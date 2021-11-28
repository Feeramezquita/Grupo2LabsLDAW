<label for="Titulo">Titulo del libro</label>
<input type="text" name="Titulo" value="{{ isset($libro->Titulo)?$libro->Titulo:'' }}" id="">
<br>
<label for="Autor">Autor del libro</label>
<input type="text" name="Autor" value="{{ isset($libro->Autor)?$libro->Autor:'' }}" id="">
<br>
<label for="AnoPublicacion">Año de publicacion</label>
<input type="number" name="AnoPublicacion" value="{{ isset($libro->AnoPublicacion)?$libro->AnoPublicacion:'' }}"id="">
<br>
<label for="Paginas">No. Paginas</label>
<input type="number" name="Paginas" value="{{isset($libro->Paginas)?$libro->Paginas:'' }}" id="">
<br>
<label for="Editorial">Editorial</label>
<input type="text" name="Editorial" value="{{isset($libro->Editorial)?$libro->Editorial:'' }}" id="">
<br>
<label for="LugarPublicacion">Lugar de publicacion</label>
<input type="text" name="LugarPublicacion" value="{{isset($libro->LugarPublicacion)?$libro->LugarPublicacion:'' }}" id="">
<br>
<label for="Genero">Genero</label>
<input type="text" name="Genero" value="{{ isset($libro->Genero)?$libro->Genero:'' }}"id="">
<br>
<input type="submit" value="Guardar">
<br>