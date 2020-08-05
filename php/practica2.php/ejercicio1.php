<?php

// hacer un programa que tenga un array con 8 numeros enteros y qye haga lo siguiente
// recorrerlo y mostrarlo
// ordenarlo y mostrarlo
//mostrar su longitud
// burcar un numero que llegue por la url ingresado por el usuario.


// Array
function mostrararray($numeros){
	$resultado="";
foreach ($numeros as $key => $numero) {
	$resultado .= $numero. "<br>";
}
return $resultado;
}
$numeros = [3,2,7,99,33,22,11,43];
// recorrerlo y mostrarlo
echo "<h1>Recorrerlo y Mostrarlo</h1><br>";
echo mostrararray($numeros);

//Ordenarlo y Mostrarlo

echo "<h2>Ordenar y Mostrar</h2><br>";
sort($numeros);
echo mostrararray($numeros)."<br>";

// mostrar su longitud
echo "<h2>Numeros total de Elementos</h2><br>";
echo count($numeros);
echo "<br><hr>";
// busqueda en el array
if (isset($_GET['numero'])) {
	$busqueda = $_GET['numero'];

	echo "<h3>Buscar en el array el numero $busqueda</h3>";

	$search = array_search($busqueda, $numeros);
	if (!empty($search)){
		echo "<h3> El numero buscado Existe en el ARRAY, en el indice: $search</h3>";
	}else{
		echo "<h3>El Numero buscado no existe en el array!</h3>";
	}
}

//Mostrar un programa que añada valores a un array que su longitud sea menor a 50 y despues que se muestre por pantalla.

$coleccion = array();

for ($i=0; $i < 50 ; $i++) { 
  	array_push($coleccion,"Elemento". $i);
  }  
  	var_dump($coleccion);

echo "<br><hr>";

// Comprobar si una variable esta vacia, y si esta vacio rellenarla con texto que este mayuscula.


$texto = "";
if (empty($texto)) {
	$texto = " holaa este deberia ser el relleno del texto";
	$mayuscula = strtoupper($texto);
	echo "<b>$mayuscula</b>";
}else{
	echo "La variable tiene este contenido". $texto;
}

echo "<br><hr>";


// crear un script en php que tenga 4 variables, una de tipo array, otra de tipo string, y una de tipo numerica entera y otra boleano y que imprima la variable que sea.

$mensaje = ['hola', 'mundo'];
$string = "Este es un mensaje";
$num = 88;
$falso = false;

if (is_array($mensaje)) {
	echo "<h3>El es un arreglo, positivo</h3><br>";
}if (is_string($string)) {
	echo "<h3>El es un String, positivo</h3><br>";
}if (is_integer($num)) {
	echo "<h3>El es un entero, positivo</h3><br>";
}if (is_bool($falso)) {
	echo "<h3>El es un boleano, positivo</h3><br>";
}else{
	echo "Variables incorrectas";
}









?>