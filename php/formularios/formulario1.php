<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORMULARIO 1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>FORMULARIO Y VALIDACION</h1>
<?php
	if (isset ( $_GET['error'] )) {
		$error = $_GET['error'];
	if ($error == "Faltan_valores") {
		echo "<b style='color: red'> Faltan Datos Por completar </b>";
	}
	if ($error == "nombre") {
		echo "<b style='color: red'>El nombre introducido es INCORRECTO </b>";
	}
	if ($error == "apellido") {
		echo "<b style='color: red'>El apellido introducido es INCORRECTO </b>";
	}
	if ($error == "edad") {
		echo "<b style='color: red'>La edad introducida es INCORRECTA </b>";
	}
	if ($error == "email") {
		echo "<b style='color: red'>El email introducido es INCORRECTO </b>";
	}
	if ($error == "password") {
		echo "<b style='color: red'>Ingresa una Contraseña de mas de 5 caracteres </b>";
	}
}


	?>
 

	<form action="formulario1_submit.php" method="POST" >
		<label for="nombre">Nombre :</label>
		<p><input type="text" name="nombre" autofocus="autofocus" required="required" placeholder="Ingresa tu Nombre"></p><br>
		<label for="Apellido">Apellido :</label>
		<p><input type="text" name="apellido" autofocus="autofocus" required="required" placeholder="Ingresa tu Apellido"></p><br>
		<label for="edad">Edad :</label>
		<p><input type="number" name="edad" minlength="2" maxlength="2" required="required" autofocus="autofocus" required="required" placeholder="Ingresa tu edad"></p><br>
		<label for="email">Email :</label>
		<p><input type="email" name="email" autofocus="autofocus" required="required" placeholder="Ingresa tu Email"></p><br>
		<label for="pass">Constraseña :</label>
		<p><input type="password" name="pass" autofocus="autofocus" required="required" placeholder="Ingresa tu Contraseña"></p><br>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	
</body>
</html>