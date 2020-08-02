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
?>

