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
	echo "<br>";
	echo $mi_arreglo[0]." ".$mi_arreglo[1]." ".$mi_arreglo[2]." ".$mi_arreglo[3];
	echo "<br>";
	for ($i=count($mi_arreglo)-1;$i >=0; $i--) { 
		echo $mi_arreglo[$i]." ";
	}
	// ejercicios d arreglos

	/*
	1.- Suponga un array con N números enteros generados aleatoriamente y mostrados en pantalla, N debe ser un número impar, mostrar en pantalla el valor que ocupa el centro del array.

	2.- Suponga un array con N notas de 0 a 20, calcule el promedio de aprobados y el promedio de los desaprobados e indique la cantidad de aprobados y desaprobados.

	3.- Buscar un elemento dentro de un arreglo que nosotros le indiquemos en una variable. Si hay más de uno, indicar igualmente la posición.


	*/
	?>
</body>
</html>