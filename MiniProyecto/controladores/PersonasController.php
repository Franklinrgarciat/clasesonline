<?php 
extract($_REQUEST);
include '../modelos/clasedb.php';
/**
 * 
 */
class PersonasController
{
	
	public function index()
	{
		
		$db=new clasedb();
		$conex=$db->conectar();
		$sql="SELECT * FROM personas";//generando sql
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$filas=mysqli_num_rows($resultado);//cantidad de registros
		$columnas=mysqli_num_fields($resultado);//cantidad de campos
		$personas=array();//arreglo para guardar los registros
		$i=0;//variable iterativa
		if ($filas>0) {
			while ($data=mysqli_fetch_object($resultado)) {
				$personas[$i]['id']=$data->id;
				$personas[$i]['nombres']=$data->nombres;
				$personas[$i]['apellidos']=$data->apellidos;
				$personas[$i]['cedula']=$data->cedula;
				$personas[$i]['tipo']=$data->tipo;
				$personas[$i]['direccion']=$data->direccion;
				$personas[$i]['id_usuario']=$data->id_usuario;
				$i++;
			}
		}
		//cambiando
		# listado
		header('Location: ../vistas/personas/index.php?filas='.$filas.'&columnas='.$columnas.'&personas='.serialize($personas));
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
		$persona=new PersonasController();
		switch ($operacion) {
			case 'index':
				$persona->index();
				break;
			
			default:
				# code...
				break;
		}
	}
	

}//fin de la clase

if (!empty($operacion)) {
	PersonasController::controlador($operacion);
} else {
	header('../home.php');
}



?>