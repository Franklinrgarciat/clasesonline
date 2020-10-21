<?php 
extract($_REQUEST);
include '../modelos/clasedb.php';
/**
 * 
 */
class ProductoController
{
	
	public function index()
	{
		
		$db=new clasedb();
		$conex=$db->conectar();
		$sql="SELECT * FROM productos";//generando sql
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
				$i++;
			}
		}
		//cambiando
		# listado
		header('Location: ../vistas/producto/index.php?filas='.$filas.'&columnas='.$columnas.'&productos='.serialize($productos));
	}

	public function registro()
	{
		# formulario para registrar
		header('Location: ../vistas/Registro/registro.php');
	}

	public function store()
	{
		# registrar
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

	public static function controlador($operacion)
	{

		$producto =new ProductoController();
		switch ($operacion) {
			case 'index':
				$producto->index();
				break;
			
			default:
				# code...
				break;
		}
	}
	

}//fin de la clase

if (!empty($operacion)) {
	ProductoController::controlador($operacion);
} else {
	header('../home.php');
}


?>