<?php 
$namespace = "Registro";// donde estoy ubicado.


$contenido = '<div class="row">
	<div class="col-md-9">
		<h2>Completa los Campos y Registrate</h2>
	</div>
	</div>
	<div class="row">
	<div class="col-md-9">
	<form action="#" method="POST">
		<label for="nombres">Nombres</label>
		<input type="text" name="nombre" required="required">
		<label for="apellidos">Apellidos</label>
		<input type="text" name="apellidos" required="required">
		<label for="email">Email</label>
		<input type="email" name="email" required="required">
		<label for="password">Contraseña</label>
		<input type="password" name="password" required="required">
		<label for="edad">Edad</label>
		<input type="number" name="edad" required="required">
		<label for="sexo">Sexo</label>
		<input type="radio" name="sexo" value="Hombre" required="required">
		<input type="radio" name="sexo" value="Mujer" required="required">
		<label for="cedula">Cedula</label>
		<input type="number" name="cedula" required="required">
		<input type="button" name="Registrarse">
	</form>
</div>
</div>';



require_once ('../../layouts/app.php');
 ?>