<?php 
$namespace="Producto"; //para saber donde estas
extract($_REQUEST);
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
$opciones="";
$categorias=unserialize($categorias);
if ($filas>0) {
    for ($i=0; $i < $filas; $i++) {
        $num=$i+1; 
        $opciones.="<option value='".$categorias[$i]['id']."'>".$categorias[$i]['categoria']."</option>";
    }
} else {

    $registros="<tr>
                    <td align='center' colspan='5'>No existen Productos en Lista</td>
                </tr>";
}
//contenido para saber que colocar

$contenido ='<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Productos</h1>
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Registro de Productos <span>Los campos con (*) son obligatorios</span>
                        </div>
                        <!-- /.panel-heading -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <form action="../../controladores/ProductoController.php" method="POST" accept-charset="utf-8">
            <input type="hidden" value="store" name="operacion">
	<div class="row">
		<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="nombre">* Nombre : </label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="text" name="nombre" placeholder="Ej: Camisa" class="form-control" required="required" title="Ingrese nombres">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="descripcion">* Descripcion</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="text" name="descripcion" placeholder="Ej: Marca" class="form-control" required="required" title="Ingrese Descripcion">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="precio">* Precio</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="number" name="precio" placeholder="Ej: 200.00" class="form-control" required="required" title="Ingrese Precio">
		</div>
	</div>

	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="stock">* Stock</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="number" name="stock" placeholder="Ej: 20" class="form-control" required="required" title="Ingrese el Stock">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="codigo">* Código</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<input type="text" name="codigo" placeholder="Ej: aa11bb22" class="form-control" required="required" title="Ingrese el código">
		</div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-2 col-sm-1"></div>
		<div class="col-lg-2 col-md-3 col-sm-4">
			<label for="categoria">* Categoría</label>
		</div>
		<div class="col-lg-6 col-md-3 col-sm-6 form-group">
			<select name="id_categoria" title="Seleccione Categoría" class="form-control">'.$opciones.'
			</select>
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