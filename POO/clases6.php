<?php

echo "<br><hr><br>";
echo "<h1> Captura de Excepsiones en POO </h2>";

try{
	if (isset($_GET['id'])) {
		echo "El Parametro Es : ".$_GET['id'];
	}else{
throw new Exception('Ha Ocurrido un Error de logica');
	}
}catch(Exception $e) {
echo "<h3>Revisar Codigo</h3>".$e->getMessage();
}