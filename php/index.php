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
	/*$mi_arreglo[]= array();// declarando arreglo

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
	}*/
	// ejercicios d arreglos

	/*
	1.- Suponga un array con N números enteros generados aleatoriamente y mostrados en pantalla, N debe ser un número impar, mostrar en pantalla el valor que ocupa el centro del array.

	2.- Suponga un array con N notas de 0 a 20, calcule el promedio de aprobados y el promedio de los desaprobados e indique la cantidad de aprobados y desaprobados.

	3.- Buscar un elemento dentro de un arreglo que nosotros le indiquemos en una variable. Si hay más de uno, indicar igualmente la posición.


	*/

	//suma
	$numero1=3;
	$numero2=6;
	$sumar=$numero1+$numero2;
	echo "La suma entre ".$numero1." y ".$numero2." es : ".$sumar;
	echo "<br>";
	//resta
	$n1=10;
	$n2=5;
	$restar=$n1-$n2;
	echo "La resta entre ".$n1." y ".$n2." es: ".$restar;
	echo "<br>";
	//multiplicacion
	$n1=4;
	$n2=5;
	$producto=$n1*$n2;
	echo "El producto entre ".$n1." y ".$n2." es: ".$producto;
	echo "<br>";
	//division
	$n1=20;
	$n2=2;
	$division=$n1/$n2;
	echo "La división entre ".$n1." y ".$n2." es: ".$division;
	echo "<br>";
	// resto
	$n1=30;
	$n2=7;
	$resto=$n1%$n2;
	echo "El resto de una divisón entre ".$n1." y ".$n2." es: ".$resto;
	echo "<br>";
	//potencia
	$n1=20;
	$n2=5;
	$potencia=pow($n1,$n2);
	echo "La potencia de ".$n1." a la ".$n2." es: ".$potencia;
	echo "<br>";
	//raiz cuadrada
	$n1=3;
	$raiz=pow($n1,1/2);
	echo "La raiz cuadrada de ".$n1." es: ".round($raiz,2);
	echo "<br>";

	//cadenas de caracteres
	$mi_cadena="     Franklin Rafael Garcia Tovar      ";
	//longitud
	$longitud=strlen($mi_cadena);
	echo "La longitud de la cadena: (".$mi_cadena.") es: ".$longitud;
	echo "<br>";
	//reemplazo
	$reemplazo=str_replace(' ', '_', $mi_cadena);
	echo "Reemplazando espacios por _ de la cadena:<br>".$reemplazo;
	echo "<br>";
	$reemplazo=str_replace('a', 'i', $mi_cadena);
	echo "Reemplazando 'a' por 'i' de la cadena:<br>".$reemplazo;
	echo "<br>";
	//quitando espacios
	$sin_espacios=trim($mi_cadena);
	echo "Cadena sin espacios:  ".$sin_espacios;
	echo "<br>";
	$sin_espacios_en_medio=str_replace(' ', '', $mi_cadena);
	echo "eliminando espacios de la cadena:<br>".$sin_espacios_en_medio;
	echo "<br>";

	2 + 3 = 13 => | 3 - 2 = 1 | 2 * 2 = 4 | 3 * 4 + 1 = 13
	3 + 4 = 25 => | 4 - 3 = 1 | 3 * 2 = 6 | 4 * 6 + 1 = 25
	4 + 5 = 41 => | 5 - 4 = 1 | 4 * 2 = 8 | 5 * 8 + 1 = 41
	5 + 6 = ?  => | 6 - 5 = 1 | 5 * 2 = 10| 6 * 10 + 1 = 61



























	?>
</body>
</html>