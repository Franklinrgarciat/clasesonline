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
		background-color: #;
	}
	
</style>
<body>

	
		<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">INMO-LIDER</h1>
    <p class="lead"><b>Soluciones inmoviliarias, Compra, Ventas, Consultas y Asesoriamiento Profesional.</b></p>
  </div>
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div>
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
	</div>
			<div class="col-md-8">
			<div class="form-group" align="center">
				<h4>Complete los Datos Sugeridos a Continuacion</h4><br>
				<form action="ejercicio5.2.php" method="post" name="miformulario" enctype="Multipart/Form-data" accept-charset="utf-8" >
				<label>Nombre</label>
					<input type="text" name="nombre" value="" required="required" placeholder="Ingrese su nombre"><br><br>
				<label>Apellido</label>
					<input type="text" name="apellido" value="" required="required" placeholder="Ingrese su Apellido"><br><br>
				<label>Cedula</label>
					<input type="number" name="cedula"  required="required" placeholder="Ingrese su Cedula"><br><br>
				<label>Edad</label>
					<input type="number" name="edad" value="" required="required" maxlength="2" minlength="2" placeholder="Ingrese su Edad"><br><br>
				<label>Valor de la casa</label>
					<input type="number" name="monto_casa" value="" required="required" placeholder="Ingrese el Valor "><br><br>
				<label>Presupuesto</label>
					<input type="number" name="presupuesto" value="" required="required" placeholder="Ingrese su Presupuesto"><br>
				<br>
  <button class="btn btn-primary" type="submit">Enviar Formulario</button>
			</div>
			
	</form>
		</div>
	</div>
	
</body>
<script src="jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</html>