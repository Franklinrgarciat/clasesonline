<?php 
extract($_REQUEST);
?>
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
	.form{
		background-color: #F2F2F2;
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
			<form action="ejercicio5_2.php" method="post" name="miformulario" enctype="Multipart/Form-data" accept-charset="utf-8" >
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<!-- <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;"> -->
					<?php 
				if (isset($mensaje) ) {
					?>
					<div class="toast" id="mensajes" data-delay="6000" style="position: absolute; top: 0; right: 0;">
					    <div class="toast-header">
					      <img src="#" class="rounded mr-2" alt="">
					      <strong class="mr-auto">Solicitud de Compra</strong>
					      <small>status</small>
					      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
					        <span aria-hidden="true">&times;</span>
					      </button>
					    </div>
					    <div class="toast-body">
					      <?php if($mensaje==0){
						 		echo "Si puede comprar; Monto restante a pagar:".$resta." en ".$cuotas." cuotas de ".$cuota." c/u";
							}else{
								echo "NO PUEDE COMPRAR, DISCULPE!!";
							} ?>
					    </div>
					</div>
				<?php	} ?>
				<!-- </div> -->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-1 form-group">
				<label for="nombre">Nombre</label>
			</div>
			<div class="col-sm-4 form-group">
				<input type="text" name="nombre" placeholder="Ej: Cesar" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-1 form-group">
				<label for="apellido">Apellido</label>
			</div>
			<div class="col-sm-4 form-group">
				<input type="text" name="apellido" placeholder="Ej: Characo" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-1 form-group">
				<label for="apellido">Cedula</label>
			</div>
			<div class="col-sm-4 form-group">
				<input type="number" name="cedula" placeholder="Ej: 12345678" class="form-control">
			</div>

		</div>
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-1 form-group">
				<label for="apellido">Edad</label>
			</div>
			<div class="col-sm-4 form-group">
				<input type="number" name="edad" placeholder="Ej: 20" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-1 form-group">
				<label for="apellido">Valor de la Casa</label>
			</div>
			<div class="col-sm-4 form-group">
				<input type="number" name="monto_casa" placeholder="Ej: 2000" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-1 form-group">
				<label for="apellido">Presupuesto</label>
			</div>
			<div class="col-sm-4 form-group">
				<input type="number" name="presupuesto" placeholder="Ej: 2000" class="form-control">
			</div>
		</div>
			<div class="row">
				<div class="col-sm-5">
					
				</div>
				<div class="col-sm-6 form-group">
					
  					<input type="submit" name="enviar" value="Enviar" class="btn-info">
  					<input type="reset" name="limpiar" value="Limpiar" class="btn-danger">
				</div>
				
			</div>
		
			</div>
			</form>
			
	<footer style="text-align: center;">
		<br><i><b>Por Franklin Garcia - Inmo-Lider-SRL<b></i><br>
	</footer>
		
</body>
<script src="../javascript/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
	$(document).ready(function(){
    	$("#mensajes").toast('show');
	});
	
</script>















</html>