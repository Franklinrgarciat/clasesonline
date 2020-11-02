<?php 
$namespace="Productos"; //para saber donde estas
//contenido para saber que colocar
extract($_REQUEST);
//---- para mensajes------------------
include('../../modelos/helper.php');
$helper=new helper();
if(isset($mensaje)){
    $opcion=$mensaje;
}else{
    $opcion=0;
}

//-------------------------------------
$registros="";
$productos=unserialize($productos);
if ($filas>0) {
    for ($i=0; $i < $filas; $i++) {
        $num=$i+1; 
        $registros.="<tr>
                        <td>".$num."</td>
                        <td>".$productos[$i]['nombre']."</td>
                        <td>".$productos[$i]['descripcion']."</td>
                        <td>".$productos[$i]['precio']."</td>
                        <td>".$productos[$i]['stock']."</td>
                        <td>".$productos[$i]['codigo']."</td>
                        <td>".$productos[$i]['categoria']."</td>
                    </tr>";
    }
} else {

    $registros="<tr>
                    <td align='center' colspan='5'>No existen Productos en Lista</td>
                </tr>";
}

$contenido ='<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Productos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    '.$helper->mensajes($opcion).'
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listado de Productos
                            <div style="float:right"><a style="color:black" href="../../controladores/ProductoController.php?operacion=create"><button type="button" ><b>Registrar</b></button></a>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="table-responsive">
                             <table  class="table table-striped table-bordered table-hover"  id="lista_productos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Stock</th>
                                            <th>Código</th>
                                            <th>Categoría</th>
                                        </tr>
                                    </thead>
                                    <tbody>'.$registros.'
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
                    <!-- /.row -->';
?>
<?php
include('../../layouts/app.php') 
?>