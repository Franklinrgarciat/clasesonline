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
	//substr
	$cadena="123456789"; // mi cadena de texto
	$a=substr($cadena,-2); // elimina todos los caracteres de la cadena menos los ultimos 2.... el numero indica la cantidad de caracteres que van a quedar
	$b=substr($cadena, 2); // elimina solo los 2 primeros... el numero indica la cantidad de caracteres que serán eliminados del principio de la cadena
	echo $a." | ".$b."<br>";// imprime variables por pantalla
	$c=substr($cadena, 3,2);//elimina los 3 primeros caract y los ultimos 2 finales
	$d=substr($cadena, -3,2);//elimina los 6 primeros caract y el ultimo
	echo $c." | ".$d."<br>";
	$e=substr($cadena, 3,-2);//elimina los 3 primeros caract y el ultimo
	$f=substr($cadena, -3,-2);// elimina los 3 primeros seguidos de la cadena ant. y los dos ultimos
	echo $e." | ".$f."<br>";
	$g=substr($cadena, 5);
	$h=substr($cadena,0, -5);
	echo $g." | ".$h."<br>";

	//ejercicio
	$cadena="";
	$num1=0;
	$num2=0;

	$resultado=substr($cadena, $num1,$num2);

	echo $resultado."<br>";
























	?>
</body>
</html>