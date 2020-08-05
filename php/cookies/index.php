<?php


/*una cookie es un fichero que se almacena en el ordenador de un usuario que visita la web con el fin de recordar datos o rastear cierta info o comportamiento del mismo en la web*/


//cookie basica
setcookie("micookie","Esta es una Galleta");

//cookie expiracion
setcookie("unyear","duracion 365 dias",time()+(60*60*24*365));

?>

<br>
<a href="ver_cookies.php" title="">Ver las cookies</a>