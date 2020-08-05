<?php


session_start();


$sesion = '<h1>Esta es una sesion normal</h1>';


$_SESSION['variable_permanente'] = "<h2> Hola soy una sesion ACTIVA </h2>";

echo  $sesion. "<br>";
echo $_SESSION['variable_permanente'];


?>
<a href="pagina1.php" >Sesiones Permanentes</a><br>