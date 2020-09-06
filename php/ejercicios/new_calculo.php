<?php 
extract($_REQUEST);

if (isset($enviada)) {
if (!empty($base)) {
	$calculo1 = pow($base, 2);
	$resultado1 = true;
}else{
	$resultado1 = false;
}
if (!empty($radio)) {
	$calculo2 = 3.14 * pow($radio, 2);
	$calculo2 = 3.14 * pow($radio, 2);
	$resultado2 = true;
}else{
	$resultado2 = false;
}
}else{
	$enviada = 0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calculando Áreas</title>
</head>
<body>
	<?php 
	if ($enviada == 1) {
		if ($resultado1) {
			echo "EL ÁREA DE UN CUADRADO ES :".$calculo1."<br>";
		}else{
			echo "FALTAN VALORES<br>";
		}
		if ($resultado2) {
			echo "EL ÁREA DE UN CIRCULO ES :".$calculo2."<br>";
		}else{
			echo "FALTAN VALORES<br>";
		}
	}


	 ?>

	<form action="" method="POST">
		
	<h2>CALCULANDO EL ÁREA DE UN CUADRADO</h2>
	<label>INGRESE LA MEDIDA DE UN LADO DEL CUADRADO</label><br>
	<input type="number" name="base"><br><br>
	
	<hr>
	<h2>CALCULANDO EL ÁREA DE UN CÍRCULO</h2>
	<label>INGRESE EL RADIO DE UN CÍRCULO</label><br>
	<input type="text" name="radio"><br><br>
	<input type="hidden" value="1" name="enviada">
	<input type="submit" name="enviar" value="enviar">
	</form>
	
</body>
</html>