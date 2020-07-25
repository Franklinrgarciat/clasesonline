<?php

extract($_REQUEST);
//echo $_POST['nombre'];
//echo $nombre." ".$apellido." ".$cedula;
if(isset($nombre) && isset($apellido) && isset ($edad) && isset($nacionalidad) && isset($presupuesto)){
	echo "no puede comprar";
	}else{
	echo "si Puede Comprar";
}


$mensaje=1;








//header('Location: ejercicio4.php?mensaje='.$mensaje);

?>