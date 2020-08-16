<?php 

extract($_REQUEST);

if (isset($enviadas)) {
	if (!empty($base) || !empty($altura)) {
		$areat=$base*$altura/2;
		$resultado1=false;
	}else{

		$resultado1 = true;
	}
	if (!empty($ancho) || !empty($largo)) {
		$arear=$ancho*$largo;
		$resultado2=false;
	}else{

		$resultado2 = true;
	}
} else {
	$enviadas=0;
}

 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<title>Cálculo de el área</title>
 </head>
 <body>
 	<h4> 
 		<?php
 		if($enviadas==1){
 	 		if($resultado1){
 	 			echo "Faltan valores para calcular el área del triángulo";
 	 		}else{
 	 			echo "El área del triángulo es:".$areat."<br>";
 	 		}
 	 		if($resultado2){
 	 			echo "Falta valores para calcular el área del rectángulo";
 	 		}else{
 	 			echo "El área del rectángulo es:".$arear."<br>";
 	 		}
 	 	}
 	  	?>

 	</h4>
 	 
 	<form action="" method="POST" >
 	<h1>CÁLCULA EL AREA DE UN TRIÁNGULO</h1>
 	<label for="base"> Base </label><br>
 	<input type="number" name="base"><br><br>
 	<label for="altura"> Altura </label><br>
 	<input type="number" name="altura"><br><br>
 	<h1>CÁLCULA EL AREA DE UN RECTÁNGULO</h1>
 	<label for="largo"> Largo </label><br>
 	<input type="number" name="largo"><br><br>
 	<label for="ancho"> Ancho </label><br>
 	<input type="number" name="ancho"><br><br>
 	<input type="hidden" name="enviadas" value="1">
 	<input type="submit" name="calcular" value="calcular">
 	</form>

 	
 </body>
 </html>