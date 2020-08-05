<?php



/*para mostrar el valor de las cookies tengo que usar $_cookie, que es una variable supergobal, es un array asociativo.*/

if (isset($_COOKIE['micookie'])) {
	echo "<h2>".$_COOKIE['micookie']. "</h2>";
}else{
	echo "No existe una cookie";
}

if (isset($_COOKIE['unyear'])) {
	echo "<h2>".$_COOKIE['unyear']. "</h2>";
}else{
	echo "No existe una cookie";
}

?>
<a href="borrar_cookies.php" >BORRAR MIS COOKIES</a>