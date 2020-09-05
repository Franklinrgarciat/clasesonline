<?php 
extract($_REQUEST);
// calculadora simple con php}

$resultado = false;
if (!empty($sumar)) {
	$resultado = "EL RESULTADO ES :".($n1 + $n2);
}
if (!empty($restar)) {
	$resultado = "EL RESULTADO ES :".($n1 - $n2);
}
if (!empty($multiplicar)) {
	$resultado = "LA MULTIPLICACION ENTRE ES :".($n1 * $n2);
}
if (!empty($dividir)) {
	$resultado = "EL RESULTADO ES :".($n1 / $n2);
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>CALCULADORA CON PHP</title>
 </head>
 <body>
 	<h1>CALCULADORA SENCILLA CON PHP</h1>

 	<form action="" method="POST">
 		<label for="">NUMERO 1</label><br>
 		<input type="number" name="n1" required="required"><br><br>
 		<label for="">NUMERO 2</label><br>
 		<input type="number" name="n2" required="required"><br><br>
 		<input type="submit" name="sumar" value="SUMAR" >
		<input type="submit" name="restar" value="RESTAR" >
		<input type="submit" name="multiplicar" value="MULTIPLICAR" >
		<input type="submit" name="dividir" value="DIVIDIR" >

 	</form>
 	<?php 
 	if ($resultado != false) {
 		echo "<h2>$resultado</h2>";
 	}else{
 		echo $resultado == false;
 	}


 	 ?>
 </body>
 </html>