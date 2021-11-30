<label for="Titulo">Titulo del libro</label>
<br>
<input type="text" name="Titulo" required value="{{ isset($libro->Titulo)?$libro->Titulo:'' }}" id="">
<br>
<br>
<label for="Autor">Autor del libro</label>
<br>
<input type="text" name="Autor"  required value="{{ isset($libro->Autor)?$libro->Autor:'' }}" id="">
<br>
<br>
<label for="AnoPublicacion">Año de publicacion</label>
<br>
<input type="number" name="AnoPublicacion" required value="{{ isset($libro->AnoPublicacion)?$libro->AnoPublicacion:'' }}"id="">
<br>
<br>
<label for="Paginas">No. Paginas</label>
<br>
<input type="number" name="Paginas" required value="{{isset($libro->Paginas)?$libro->Paginas:'' }}" id="">
<br>
<br>
<label for="Editorial">Editorial</label>
<br>
<input type="text" name="Editorial" required value="{{isset($libro->Editorial)?$libro->Editorial:'' }}" id="">
<br>
<br>
<label for="LugarPublicacion">Lugar de publicacion</label>
<br>
<input type="text" name="LugarPublicacion" required value="{{isset($libro->LugarPublicacion)?$libro->LugarPublicacion:'' }}" id="">
<br>
<br>
<label for="Genero">Genero</label>
<br>
<input type="text" name="Genero" required value="{{ isset($libro->Genero)?$libro->Genero:'' }}"id="">
<br>
<br>
<input type="submit" required value="Guardar">
<br>
<br>
<br>
<a href="{{ url('/usuario/')}}">Regresar</a>
