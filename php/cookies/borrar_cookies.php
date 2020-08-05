<?php 

if (isset($_COOKIE['micookie'])) {
	unset($_COOKIE['micookie']);
	setcookie('micookie','', time()-100);
}


 ?>

 <a href="Ver_cookies.php" >BORRAR MIS COOKIES</a>