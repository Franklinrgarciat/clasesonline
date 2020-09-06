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
	?> 
	<a href="ejercicio1.php" title="" style="text-decoration: none">* Ejercicio1</a><br>
	<a href="ejercicio2.php" title="" style="text-decoration: none">* Ejercicio2</a><br>
	<a href="ejercicio3.php" title="" style="text-decoration: none">* Ejercicio3</a><br>
	<a href="ejercicio4.php" title="" style="text-decoration: none">* Ejercicio4</a><br>
	<a href="ejercicio5.php" title="" style="text-decoration: none">* Ejercicio5</a><br>
	<h3>Praticas sencillas</h3><br>
	<a href="arrays/indices.php" style="text-decoration: none">Practicas_indices</a><br>
	<a href="cookies/index.php" style="text-decoration: none" >Practicas_cookies</a><br>
	<a href="includes/practica1.php" style="text-decoration: none" >Practicas Includes</a><br>
	<a href="sesiones/sesiones1.php" style="text-decoration: none" >Practicas de Sesiones</a><br><br>
	<a href="practicach.php" style="text-decoration: none" >Practicas de CHARACO</a><br><br>
	<a href="formularios/formulario1.php" style="text-decoration: none" > Formulario Validado</a><br><br>
	<a href="ficheros/fichero.php" style="text-decoration: none" > Ficheros</a><br><br>
	<a href="cookies/index.php" style="text-decoration: none" > Cookies </a><br><br>

	<a href="calculo_area.php" style="text-decoration: none" > calculo de area </a><br><br>
	<a href="ejercicios/new_calculo.php" style="text-decoration: none" > CALCULANDO AREAS </a><br><br>
	<a href="../POO/index.php" title="">POO</a>
	<br>
	<?php
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
	$numero1=rand(1,8);
	$numero2=rand(1,8);
	$sumar=$numero1+$numero2;
	echo "La suma entre ".$numero1." y ".$numero2." es : ".$sumar;
	echo "<br>";
	echo "<hr>";
	//resta
	$n1=rand(10,20);
	$n2=rand(5,7);
	$restar=$n1-$n2;
	echo "La resta entre ".$n1." y ".$n2." es: ".$restar;
	echo "<br>";
	//multiplicacion
	$n1=rand(4,20);
	$n2=rand(1,20);
	$producto=$n1*$n2;
	echo "El producto entre ".$n1." y ".$n2." es: ".$producto;
	echo "<br>";
	//division
	$n1=rand(18,30);
	$n2=rand(20,25);
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
	echo "<hr>";

	//cadenas de caracteres
	$mi_cadena="Franklin Rafael Garcia Tovar";
	//longitud
	$longitud=strlen($mi_cadena);
	echo "La longitud de la cadena: (".$mi_cadena.") es: ".$longitud;
	echo "<br>";
	//reemplazo
	$reemplazo=str_replace(' ', 'y', $mi_cadena);
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
	$c=substr($cadena, 3,2);//elimina los 3 primeros caract y muestra los siguientes dos caract de la cadena
	$d=substr($cadena, -3,2);//corre 3 lugares de izquierda a derecha y muestra los dos solicitados y elimina el resto
	echo $c." | ".$d."<br>";
	$e=substr($cadena, 3,-2);//elimina los 3 primeros caract y los 2 ultimos
	$f=substr($cadena, -3,-2);//empieza a contar desde los 3 ultimos y elimina los dos ultimos de la cadena
	echo $e." | ".$f."<br>";
	$g=substr($cadena, 5); //elimina los cinco primeros caract. de la cadena
	$h=substr($cadena,0, -5);// elimina los ultimos cinco caract de la cadena
	echo $g." | ".$h."<br>";

	//ejercicio
	$cadena="Franklin Rafael Garcia Tovar";
	$num1=4;
	$num2=-2;

	$resultado=substr($cadena, $num1,$num2);

	echo $resultado."<br>";
	echo "<hr>";

	// operadores incremento y decremento
	$year= 2020;
	$year++;
	echo "<h1>$year</h1>";
	echo "<br>";
	$year= 2020;
	$year--;
	echo "<h1>$year</h1>";
	echo "<hr>";
	// operadores de asignacion, lo puedo hacer con cualquier signo que quiera darle valor a una variable
	$edad=55;

	echo $edad."<br>";
	echo ($edad+=5)."<br>";
	echo "<hr>";

	/*Condicional if
	if(condicion){
		instruciones
	}else{
		otras instruciones
	}

	//operadores de comparecion
	== igual
	=== identico
	!= distinto
	<> diferente
	!== no identico
	< menor que
	> mayor que
	<= menor o igual que
	>= mayor igual que
	*/
	$color= "verde";
	if($color=="rojo"){
		echo "el color es rojo";
	}else{
		echo "el color no es rojo";
	}
	echo "<br>";


	$yearr = 2020;
	if ($yearr==2020){
		echo "estamos en el 2020";
	}else{
		echo "no estamos en el 2020";
	}
	echo "<br>";

	$nombre= "Cesar Characo";
	$pais="honduras";
	$cuidad= "San Juan";
	$yearrr=42;
	$mayoria_edad=18;

	if($yearrr>=$mayoria_edad){
		echo "el señor ".$nombre." es mayor de edad";
		if ($pais=="venezuela"){
		echo " y es de ".$cuidad;
	}else{
		echo "el señor no es venezolano";
	}
	}else{
		echo $nombre."no es mayor de edad";
	}























	?>
</body>
</html>