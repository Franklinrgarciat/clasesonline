<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
//hola characo//
	/*hola mundo*/
	echo "<h1> BIENVENIDOS A PHP</h1></br>";
	$minombre="Franklin Garcia";
	$cedula=95756273;
	//formas de imprimir variables
	echo $minombre." cedula:".$cedula."<br>";

	echo "$minombre cedula:$cedula";
	echo "<br>";
	//--------------------------------------------
	$mi_arreglo[]= array();// declarando arreglo

	$mi_arreglo= ['mi', 'especialidad','es','programar'];

	echo $mi_arreglo[0]." ".$mi_arreglo[1]." ".$mi_arreglo[2]." ".$mi_arreglo[3];

	echo "<br>";
	for ($i=0; $i < count($mi_arreglo); $i++) { 
		echo $mi_arreglo[$i]." ";
	}

	?>
</body>
</html>