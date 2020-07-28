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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<style type="text/css" media="screen">

		*{
			color: white;
			background-color: #666;
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
	.mensaje{
		color:red;
	}
	</style>
</head>
<body>
	<div class="container">
	
		<div class="navbar-header">
	
			<h4>Mi Primer Formulario</h4>
		</div>
	<div class="row">
		<div class="col-12">
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
	<form action="ejercicio4_submit.php" method="post" name="miformulario" enctype="Multipart/Form-data" accept-charset="utf-8" >
	<div class="row">
		<div class="col" align="center">
			<small>(<span class="mensaje">*</span>) Los Campos son obligatorios</small>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-6" align="right"><span class="mensaje">*</span> <label>Nombre</label></div>
		<div class="col-3"><input class="form-control" required="required" type="text" name="nombre" value="" placeholder="Ej: Franklin" title="Ingrese su nombre">
			<small><span class="mensaje">Ingrese su nombre</span></small>
		</div>
		
	</div>
	<div class="row form-group">
		
		<div class="col-6" align="right"><span class="mensaje">*</span> <label>Apellido</label></div>
		<div class="col-3"><input title="Ingrese su apellido" required="required" class="form-control" type="text" name="apellido" value="" placeholder="Ej: Garcia">
			<small><span class="mensaje">Ingrese su apellido</span></small>
		</div>
	</div>
	<div class="row form-group">
		
		<div class="col-6" align="right"><span class="mensaje">*</span> <label>Cédula</label></div>
		<div class="col-1">
			<select name="nacionalidad" class="form-control" title="Seleccione la nacionalidad">
				<option value="V" title="Venezolan@">V</option>
				<option value="A" title="Argentin@">A</option>
			</select>
		</div>
		<div class="col-2">
			<input class="form-control" type="number" required="required" title="Ingrese se Cédula" name="cedula" value="" placeholder="Ej: 12121211">
			<small><span class="mensaje">Ingrese su cédula</span></small></div>
		
	</div>
	<div class="row form-group">
		
		<div class="col-6" align="right"><span class="mensaje">*</span> <label>Edad</label></div>
		<div class="col-3"><input class="form-control" title="Ingrese la Edad" type="number" maxlength="2" minlength="2" name="edad" value="" placeholder="Ej: 18" size="4" required="required">
			<small><span class="mensaje">Ingrese su edad</span></small></div>
		
	</div>
	<div class="row form-group">
		
		<div class="col-6" align="right"><span class="mensaje">*</span> <label>Valor de la Casa</label></div>
		<div class="col-3"><input class="form-control" required="required" type="number" title="Ingrese el valor de la casa" name="monto_casa" value="0" placeholder="Ej: 500000">
			<small><span class="mensaje">Ingrese el valor de la casa</span></small>
		</div>
		
	</div>
	<div class="row form-group">
		
		<div class="col-6" align="right"><span class="mensaje">*</span> <label>Presupuesto para la Casa</label></div>
		<div class="col-3"><input class="form-control" required="required" type="number" title="Ingrese su presupuesto para la compra de la casa" name="presupuesto" value="0" placeholder="Ej: 20000">
			<small><span class="mensaje">Ingrese su presupuesto</span></small>
		</div>
	</div>
	<div class="row form-group" >
		
		<div class="col-6"></div>
		<div class="col-3"><input class="btn-primary" type="reset" name="Limpiar" value="Limpiar"><input class="btn-info" type="submit" name="Enviar" value="Enviar"></div>
		<div class="col-3"></div>
		
	</div>
	
	</form>
</div>
</body>
<script src="jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</html>