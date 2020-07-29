<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cotiza Inmo-Lider</title>
	<link rel="stylesheet" href="">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<style type="text/css" media="screen">
	*{
		background-color: #D8D8D8;
	}
	h4{
		background-color: #A4A4A4;
		text-align: center;
		padding: 20px;
	}

	
</style>
<body>

	
		<div class="header">
  <div class="container">
    <h1 class="display-4">INMO-LIDER</h1>
    <p class="lead"><b>Soluciones inmoviliarias, Compra, Ventas, Consultas y Asesoriamiento Profesional.</b></p><br>

	<h4>Complete los Datos Sugeridos a Continuacion</h4><br>
  </div>
		
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				
			</div>
		
		<div>
			<?php 
			if (isset($mensaje) ) {
				?>
			<div class="alert alert-primary" role="alert">
				<?php if($mensaje==0){
			 		echo "Si puede comprar; Monto restante a pagar:".$resta." en ".$cuotas." cuotas de ".$cuota." c/u";
				}else{
					echo "NO PUEDE COMPRAR, DICULPE!!";
				} ?>
			</div>
	<?php	} ?>		
		</div>
	
		
			<div class="col-md-4">
			<div class="form-group" align="right">
				<form action="ejercicio5.2.php" method="post" name="miformulario" enctype="Multipart/Form-data" accept-charset="utf-8" >
					<div class="datos">
						<br><br><br><br>
				<ul>
							
				<label><li>Nombre</li></label><br><br>
				<label><li>Apellido</li></label><br><br>
				<label><li>Cedula</li></label><br><br>
				<label><li>Edad</li></label><br><br>
				<label><li>Valor de la casa</li></label><br><br>
				<label><li>Presupuesto</li></label><br><br>
				<br>
						</ul>		
					</div>
		</div>
			</div>
			<div class="col-md-4">
				<br><br><br><br>
					<input type="text" name="nombre" value="" style="background-color: white;" required="required" placeholder="Ingrese su nombre"><br><br>
					<input type="text" name="apellido" value="" style="background-color: white;" required="required" placeholder="Ingrese su Apellido"><br><br>
					<input type="number" name="cedula"  style="background-color: white;" required="required" placeholder="Ingrese su Cedula"><br><br>
					<input type="number" name="edad" value="" style="background-color: white;" required="required" maxlength="2" minlength="2" placeholder="Ingrese su Edad"><br><br>
					<input type="number" name="monto_casa" style="background-color: white;" value="" required="required" placeholder="Ingrese el Valor "><br><br>
					<input type="number" name="presupuesto" style="background-color: white;" value="" required="required" placeholder="Ingrese su Presupuesto"><br><br>
  <a href="http://localhost/clasesonline/php/ejercicio5.2.php" class="btn btn-primary" type="submit">Enviar Formulario</a>
			</div>
			
	</form>
	
	</div>
	<footer style="text-align: center;">
		<br><i><b>Por Franklin Garcia - Inmo-Lider-SRL<b></i><br>
	</footer>
	
</body>
<script src="jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</html>