<?php

extract($_REQUEST);
//echo $_POST['nombre'];
echo $nombre." ".$apellido." ".$cedula;


$mensaje=1;








header('Location: ejercicio4.php?mensaje='.$mensaje);

?>