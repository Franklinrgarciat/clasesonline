<?php 
$namespace="Personas"; //para saber donde estas
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
$personas=unserialize($personas);
if ($filas>0) {
    for ($i=0; $i < $filas; $i++) {
        $num=$i+1; 
        $registros.="<tr>
                        <td>".$num."</td>
                        <td>".$personas[$i]['nombres']."</td>
                        <td>".$personas[$i]['apellidos']."</td>
                        <td>".$personas[$i]['cedula']."</td>
                        <td>".$personas[$i]['tipo']."</td>
                        <td>".$personas[$i]['direccion']."</td>
                    </tr>";
    }
} else {

    $registros="<tr>
                    <td align='center' colspan='5'>No existen registros</td>
                </tr>";
}

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
                            Listado de Personas
                            <div style="float:right"><a style="color:black" href="../../controladores/PersonasController.php?operacion=create"><button type="button" ><b>Registrar</b></button></a>
                            </div>
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                             <table  class="table table-striped table-bordered table-hover"  id="lista_personas">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Cédula</th>
                                            <th>Tipo</th>
                                            <th>Dirección</th>
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
