<?php


session_start();


$session = '<h1>Esta es una sesion normal</h1>';


$_SESSION['variable_permanente'] = "<h2> Hola soy una sesion ACTIVA </h2>";
if (isset($_SESSION)) {
	echo $_SESSION['variable_permanente'];
}else{
	echo "la sesion no existe";
}
echo  $session. "<br>";
echo $_SESSION['variable_permanente'];


?>
<a href="pagina1.php" >Sesiones Permanentes</a><br>