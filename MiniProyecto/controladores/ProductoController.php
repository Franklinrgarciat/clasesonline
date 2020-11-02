<?php 
extract($_REQUEST);
include '../modelos/clasedb.php';
/**
 * 
 */
class ProductoController
{
	
	public function index($mensaje)
	{
		
		$db=new clasedb();
		$conex=$db->conectar();
		$sql="SELECT productos.*,categorias.categoria FROM productos, categorias WHERE productos.id_categoria =categorias.id";//generando sql
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$filas=mysqli_num_rows($resultado);//cantidad de registros
		$columnas=mysqli_num_fields($resultado);//cantidad de campos
		$productos=array();//arreglo para guardar los registros
		
		$i=0;//variable iterativa
		if ($filas>0) {
			while ($data=mysqli_fetch_object($resultado)) {
				$productos[$i]['id']=$data->id;
				$productos[$i]['nombre']=$data->nombre;
				$productos[$i]['descripcion']=$data->descripcion;
				$productos[$i]['precio']=$data->precio;
				$productos[$i]['stock']=$data->stock;
				$productos[$i]['codigo']=$data->codigo;
				$productos[$i]['categoria']=$data->categoria;
				$i++;
			}
		}
		//cambiando
		# listado
		header('Location: ../vistas/producto/index.php?mensaje='.$mensaje.'&filas='.$filas.'&columnas='.$columnas.'&productos='.serialize($productos));
	}

	public function create($mensaje)
	{
		# formulario para create
		$db=new clasedb();
		$conex=$db->conectar();
		$sql="SELECT * FROM categorias";//generando sql
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$filas=mysqli_num_rows($resultado);//cantidad de registros
		$columnas=mysqli_num_fields($resultado);//cantidad de campos
		$categorias=array();//arreglo para guardar los registros
		
		$i=0;//variable iterativa
		if ($filas>0) {
			while ($data=mysqli_fetch_object($resultado)) {
				$categorias[$i]['id']=$data->id;
				$categorias[$i]['categoria']=$data->categoria;
			
				$i++;
			}
		}
		header('Location: ../vistas/producto/create.php?mensaje='.$mensaje.'&filas='.$filas.'&columnas='.$columnas.'&categorias='.serialize($categorias));
	}
	public function store($mensaje)
	{
		extract($_POST);
		$db=new clasedb();
		$conex=$db->conectar();
		
		$sql="SELECT * FROM productos WHERE codigo='".$codigo."'";//generando sql
		//echo $sql;
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$buscar1=mysqli_num_rows($resultado);//cantidad de registros

		if($buscar1>0){
			$mensaje=6;
		header('Location: ../controladores/ProductoController.php?operacion=create&mensaje='.$mensaje);
		}else{
			$sql="INSERT INTO productos VALUES(NULL,'".$nombre."','".$descripcion."',".$precio.",".$stock.",'".$codigo."',".$id_categoria.")";

					$resultado=mysqli_query($conex,$sql);//ejecutando sql
					
					if($resultado){
						$mensaje=4;
					header('Location: ../controladores/ProductoController.php?operacion=index&mensaje='.$mensaje);		
					}else{
						$mensaje=5;
					header('Location: ../controladores/ProductoController.php?operacion=index&mensaje='.$mensaje);		
					}
		}

	}

	public function edit()
	{
		# formulario para editar
	}

	public function update()
	{
		# editar
	}

	public function destroy()
	{
		# eliminar
	}

	public static function controlador($operacion, $mensaje)
	{

		$producto =new ProductoController();
		switch ($operacion) {
			case 'index':
				$producto->index($mensaje);
				break;
			case 'create':
				$producto->create($mensaje);
				break;
			case 'store':
				$producto->store($mensaje);
				break;
			default:
				# code...
				break;
		}
	}
	

}//fin de la clase

if (!empty($operacion)) {
	if (!empty($mensaje)) {
		ProductoController::controlador($operacion, $mensaje);
	}else{
		ProductoController::controlador($operacion, 0);
	}
	
} else {
	header('../home.php');
}


?>