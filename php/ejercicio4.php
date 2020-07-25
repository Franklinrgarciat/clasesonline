<?php 
extract($_REQUEST);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mi Formulario</title>
	<link rel="stylesheet" href="">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css" media="screen">
		*{
			color: white;
			background-color: green;
			font-family: Arial;
		}
		label{
			background-color: #666;		
		}
		.navbar-header{
	background-color: white;
	width: 300px;
	margin: auto;
	margin-top: 35px
		}
		.form{
	background-color: #666;
	color: white;
	padding: 6px;
	font-family: monospace;
	font-size: 20px
		}
		.botones{
			background-color: #666;

		}
	</style>
</head>
<body><div class="container">
	
	<div class="navbar-header">
	
	<h4>Mi Primer Formulario</h4>
	</div>
	<?php 
	//echo $mensaje;
	if (isset($mensaje) ) {

		if($mensaje==1){
		?>
		<div class="alert alert-primary" role="alert">
		  NO PUEDE HACERLO
		</div>
	<?php
		}else{
		?>
		<div class="alert alert-primary" role="alert">
		  SI PUEDE HACERLO
		</div>
	<?php	
		}
	}?>
	<form action="ejercicio4_submit.php" method="post" name="miformulario" enctype="Multipart/Form-data" accept-charset="utf-8" >
		
	<div class="form" align="center" >
	<label>Nombre</label> <input type="text" name="nombre" value="" placeholder="Ingrese su Nombre"><br>
	<label>Apellido</label> <input type="text" name="apellido" value="" placeholder="Ingrese su Apellido"><br>
	<label>Edad</label> <input type="text" name="edad" value="" placeholder="Ingrese su Edad"><br>
	<label>Cedula</label> <input type="text" name="cedula" value="" placeholder="Ingrese su Cedula"><br>
	<label>Telefono</label> <input type="text" name="telefono" value="" placeholder="Ingrese su Telefono"><br>
	<div class="botones">
	<input class="btn-primary" type="reset" name="Limpiar" value="Limpiar">
	<input class="btn-info" type="submit" name="Enviar" value="Enviar">
		
	</div>
	</div>
	
	</form>
</div>
</body>
<script src="jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</html>