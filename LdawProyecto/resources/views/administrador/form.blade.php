<label for="name">Nombre del usuario</label>
<input type="text" name="name" required value="{{ isset($usuario->name)?$usuario->name:'' }}" id="name">
<br>
<label for="correo">Correo del usuario</label>
<input type="email" name="correo" required alue="{{ isset($usuario->correo)?$usuario->correo:'' }}" id="correo">
<br>
<label for="password">Contraseña </label>
<input type="password" name="password" required value="{{ isset($usuario->password)?$usuario->password:'' }}" id="password">
<br>
<label for="rol">Rol </label>
<select class="form-select" aria-label="Default select example" name="rol" id="rol">
  <option selected required value="{{ isset($usuario->rol)?$usuario->rol:'' }}">{{ isset($usuario->rol)?$usuario->rol:'' }}</option>
  <option value="Usuario">Usuario</option>
  <option value="Administrador">Administrador</option>
</select>
<br>

<input type="submit" value="Guardar">
<br>
<br>
<a href="{{ url('/administrador/')}}">Regresar</a>