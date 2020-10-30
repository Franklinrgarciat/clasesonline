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
		$personas=array();//arreglo para store los registros
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

	public function create()
	{
		# formulario para create
		
		header('Location: ../vistas/personas/create.php');
	}

	public function store()
	{
		extract($_POST);
		$db=new clasedb();
		$conex=$db->conectar();

		//----verificando cédula
		$sql="SELECT * FROM personas WHERE cedula='".$cedula."'";//generando sql
		//echo $sql;
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$buscar1=mysqli_num_rows($resultado);//cantidad de registros

		//----verificando email
		$sql="SELECT * FROM usuarios WHERE email='".$email."'";//generando sql
		//echo $sql;
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$buscar2=mysqli_num_rows($resultado);//cantidad de registros

		//----verificando username
		$sql="SELECT * FROM usuarios WHERE username='".$username."'";//generando sql
		//echo $sql;
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$buscar3=mysqli_num_rows($resultado);//cantidad de registros






		if($buscar1>0){
			$mensaje=1;
			header('Location: ../vistas/personas/create.php?mensaje='.$mensaje);
		}else{
			if($buscar2>0){
				$mensaje=2;
				header('Location: ../vistas/personas/create.php?mensaje='.$mensaje);
			}else{
				if($buscar3){
					$mensaje=3;
					header('Location: ../vistas/personas/create.php?mensaje='.$mensaje);	
				}else{
					//registrando el usuario
					$clave=password_hash($cedula, PASSWORD_DEFAULT);
					$sql="INSERT INTO usuarios VALUES(NULL,'".$username."','".$email."','".$clave."','Persona')";
					$resultado1=mysqli_query($conex,$sql);//ejecutando sql
					$id_usuario=mysqli_insert_id($conex);
					//registrando la persona
					$sql="INSERT INTO personas VALUES(NULL,'".$nombres."','".$apellidos."','".$cedula."','".$tipo."','".$direccion."',".$id_usuario.")";
					$resultado2=mysqli_query($conex,$sql);//ejecutando sql
					
					if($resultado1 && $resultado2){
						$mensaje=4;
					header('Location: ../controladores/PersonasController.php?operacion=index&mensaje'.$mensaje);		
					}else{
						$mensaje=5;
					header('Location: ../controladores/PersonasController.php?operacion=index&mensaje'.$mensaje);		
					}
				}
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

	public static function controlador($operacion)
	{
		$persona=new PersonasController();
		switch ($operacion) {
			case 'index':
				$persona->index();
				break;
			case 'create':
				$persona->create();
				break;
			case 'store':
				$persona->store();
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