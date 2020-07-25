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
			background-color: black;
			font-family: Arial;
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
			color: white;
		}
	</style>
</head>
<body><div class="container">
	
	<div class="navbar-header">
	
	<h4>Mi Primer Formulario</h4>
	</div>
	<div class="form" align="center" >
	<label>Nombre <input type="text" name="nombre" value="" placeholder="Ingrese su Nombre"></label><br>
	<label>Apellido <input type="text" name="apellido" value="" placeholder="Ingrese su Apellido"></label><br>
	<label>Edad <input type="text" name="edad" value="" placeholder="Ingrese su Edad"></label><br>
	<label>Cedula <input type="text" name="cedula" value="" placeholder="Ingrese su Cedula"></label><br>
	<label>Telefono <input type="text" name="telefono" value="" placeholder="Ingrese su Telefono"></label><br>
	<div class="botones">
	<label><input class="primary" type="reset" name="Limpiar" value="Limpiar"></label>
	<label><input class="default" type="submit" name="Enviar" value="Enviar"></label>		
		
	</div>
	</div>
	
</div>
</body>
<script src="jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</html>