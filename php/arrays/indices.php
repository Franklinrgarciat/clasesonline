<?php

$cantantes = array ('Jenifer Lopez','Bruno Mars','Michael Jackson');
echo $cantantes [0];
$futbolistas = ['Cristiano Ronaldo','Lionel Messi','Karin Benzema'];
var_dump($futbolistas);
echo $futbolistas[2];


echo "<br><hr>";
//Recorrer con For

	echo "Los Futbolistas son: ";
for ($i=0; $i < count($futbolistas); $i++) { 
	echo "<ul>";
	echo "<li>".$futbolistas[$i]."</li>";
	echo "</ul>";
}

echo "<br><hr>";
// recorriendo los valores del indice con foreach
echo "Listado de cantantes";
echo "<ul>";
foreach ($cantantes as $cantante) {
		echo "<li>".$cantante."</li>";
}
echo "</ul>";
echo "<br><hr>";
//Arrays Asociativos

$gente = array (
	'nombre' => 'Franklin',
	'apellido' => 'Garcia',
	'edad' => 25); 
echo $gente['edad'];

//Arrays Multidimensional
echo "<br><hr>";
$contactos = array (
	array ('nombre' => 'Luis',
	'email' => 'luis@gmail.com'),
	array (
	'nombre' => 'Franklin',
	'email' => 'Franklin@gmail.com'),
	array (
	'nombre' => 'Marcelo',
	'email' => 'Marceloa@gmail.com')
);
	 echo ($contactos[2]['email']);
	 foreach ($contactos as $key => $contacto) {
	 	var_dump($contacto);
	 }
echo "<br><hr>";
// Funciones para ordenar arrays.

	 $alumnos=['luis', 'federico', 'tobyas', 'george', 'cristiano'];
//funciones para añadir elementos a un array.
	 $alumnos[] = "gonzalo";
	 $alumnos[] = "ignacio";
	 $alumnos[] = "martin";
	 array_push($alumnos, 'victor');
//funciones para eliminar un array
	 array_pop($alumnos);
	 unset($alumnos[3]);
	 asort ($alumnos);
	 var_dump ($alumnos);
//finciones para ordenar numericamente
	 $secciones=[1,2,5,8,22,11,34];
	 sort($secciones);
 echo "<br><hr>";
	 var_dump($secciones);

// funcion para buscar dentro de un arreglo
echo "<br><hr>";
	 $primos=['daniel','lucia','victor', 'rafael'];
	 
	 $resultado = array_search('lucia', $primos);
	 var_dump($resultado);

?>

