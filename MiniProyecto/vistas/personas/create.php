<?php 
$namespace="Personas"; //para saber donde estas
extract($_REQUEST);
//contenido para saber que colocar
//---- para mensajes ---------------
include('../../modelos/helper.php');
$helper=new helper();

if(isset($mensaje)){
	$opcion=$mensaje;
}else{
	$opcion=0;
}

//---------------------------------
/* para mensajes de errores*/
$contenido ='<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Personas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <span>'.$helper->mensajes($opcion).'</span>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Registro de Personas <span>Los campos con (*) son obligatorios</span>
                        </div>
                        <!-- /.panel-heading -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <form action="../../controladores/PersonasController.php" method="POST" accept-charset="utf-8">
            <input type="hidden" value="store" name="operacion">
	<div class="row">
		<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="nombres">* Nombres</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="text" name="nombres" placeholder="Ej: Maria" class="form-control" required="required" title="Ingrese sus nombres">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="apellidos">* Apellidos</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="text" name="apellidos" placeholder="Ej: García" class="form-control" required="required" title="Ingrese sus apellidos">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="cedula">* Cédula</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="number" name="cedula" placeholder="Ej: 12345678" class="form-control" required="required" title="Ingrese su cedula">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="tipo">* Tipo</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<select name="tipo" class="form-control" title="Seleccione que tipo persona es">
				<option value="Cliente">Cliente</option>
				<option value="Visitante">Visitante</option>
				<option value="Proveedor">Proveedor</option>
			</select>
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="direccion"> Dirección</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<textarea name="direccion" rows="5" cols="10" placeholder="Ej: Av. Bermudez, diagonal a Quinta Cristal" title="Ingrese la dirección de su residencia" class="form-control"></textarea>
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-12" >
			<center>
			<label for="para_usuarios">Información para el usuario (la contraseña será su cédula)</label>
			</center>
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="email">* Correo</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="email" name="email" placeholder="Ej: mariag@example.com" class="form-control" required="required" title="Ingrese su email">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="username">* Nombre de Usuario</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="text" name="username" placeholder="Ej: mariag" class="form-control" required="required" title="Ingrese su Nombre de Usuario">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4" style="float:right">
			<input type="reset" name="limpiar" value="Limpiar" class="btn btn-danger">
		</div>
		<div class="col-lg-2 col-md-3 col-sm-4 form-group" style="float:center">
			<input type="submit" name="enviar" value="Registrar" class="btn btn-info">
		</div>
	</div>
</form>
                    ';
?>


<?php
include('../../layouts/app.php') 
?>