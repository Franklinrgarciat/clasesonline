<?php 
extract($_REQUEST);
$calculo1 = true;
$calculo2 = true;
if (!empty($base) && !empty($altura)) {
	$base = $base;
	$altura = $altura;
	$calculo1 = $base * $altura;
	$calculo1 = true;
}else{
	$calculo1 = false;
}
if (!empty($radio)) {
	$radio = $radio
	$calculo2 = 3,14 * pow($radio, 2);
	$calculo2 = true;
}else{
	$calculo2 = false;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calculando Areas</title>
</head>
<body>

	<form action="" method="POST">
		
	<h2>CALCULANDO EL AREA DE UN CUADRADO</h2>
	<label>INGRESE LA BASE DEL CUADRADO</label><br>
	<input type="number" name="base"><br><br>
	<label>INGRESE LA ALTURA DEL CUADRADO</label><br>
	<input type="number" name="altura"><br><br>
	
	<hr>
	<h2>CALCULANDO EL AREA DE UN CIRCULO</h2>
	<label>INGRESE EL RADIO DE UN CIRCULO</label><br>
	<input type="number" name="base"><br><br>
	
	<input type="submit" name="enviar" value="enviar">
	</form>
	
</body>
</html>