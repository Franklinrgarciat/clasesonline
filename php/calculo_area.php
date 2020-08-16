<?php 
$resultado1 = false;
$resultado2 = false;
$error = 'faltan_valores';

if (!empty($_POST['n1']) && !empty($_POST['n2'])) {
	$error = 'ok';
	if (isset($_POST['calcular'])) {
		$resultado1 = "el area de un triangulo es :".($_POST['n1'] * $_POST['n2'] / 2);
	}
	if (isset($_POST['calcular'])) {
		$resultado2 = "el area de un RECTANGULO es :".($_POST['n1'] * $_POST['n2']);


		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];

		if (!is_int($n1) && filter_var($n1, FILTER_VALIDATE_INT)) {
			$error = 'n1';
		}
		if (!is_int($n2) && filter_var($n2, FILTER_VALIDATE_INT)) {
			$error = 'n2';
		}
	}
	}else{
	echo $error = "faltan_valores";
}
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<title>Calculo de el area</title>
 </head>
 <body>
 	 <?php 
 	 if (isset ( $_GET['error'] )) {
		$error = $_GET['error'];
	if ($error == "faltan_valores") {
		echo "<b style='color: blue'> Faltan Datos Por completar </b>";
	}
}
 	 ?>


 	<h1>CALULA EL AREA DE UN TRAINGULO</h1>
 	<form action="" method="POST" >
 	<label for="n1"> Numero 1 </label><br>
 	<input type="number" name="n1"><br><br>
 	<label for="n2"> Numero 2 </label><br>
 	<input type="number" name="n2"><br><br>
 	<input type="submit" name="calcular" value="calcular">
 	</form>
 	<?php
 	if ($resultado1 != false){
 		echo "<h2>$resultado1</h2>";
 	}
 	if ($resultado2 != false) {
 		echo "<h2>$resultado2</h2>";	
 	}
 	?>
 	
 </body>
 </html>