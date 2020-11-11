<?php 
extract($_REQUEST);
include '../modelos/clasedb.php';
/**
 * 
 */
class PersonasController
{
	
	public function index($mensaje)
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
		header('Location: ../vistas/personas/index.php?mensaje='.$mensaje.'&filas='.$filas.'&columnas='.$columnas.'&personas='.serialize($personas));
	}

	public function create($mensaje)
	{
		# formulario para create
		
		header('Location: ../vistas/personas/create.php?mensaje='.$mensaje.'');
	}

	public function store($mensaje)
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
			header('Location: ../controladores/PersonasController.php?operacion=create&mensaje='.$mensaje);
		}else{
			if($buscar2>0){
				$mensaje=2;
				header('Location: ../controladores/PersonasController.php?operacion=create&mensaje='.$mensaje);
			}else{
				if($buscar3){
					$mensaje=3;
					header('Location: ../controladores/PersonasController.php?operacion=create&mensaje='.$mensaje);	
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

	public function edit($mensaje)
	{
		# formulario para editar
		extract($_GET);
		//echo $id_persona."----------";
		$db=new clasedb();
		$conex=$db->conectar();

		//busando persona
		$sql="SELECT * FROM personas,usuarios WHERE personas.id=".$id_persona." && personas.id_usuario=usuarios.id";
		$resultado=mysqli_query($conex,$sql);
		$filas=mysqli_num_rows($resultado);//cantidad de registros
		$columnas=mysqli_num_fields($resultado);//cantidad de campos
		$persona=array();//arreglo para store los registros
		$i=0;//variable iterativa
		if ($filas>0) {
			while ($data=mysqli_fetch_object($resultado)) {
				$persona[$i]['id']=$data->id;
				$persona[$i]['nombres']=$data->nombres;
				$persona[$i]['apellidos']=$data->apellidos;
				$persona[$i]['cedula']=$data->cedula;
				$persona[$i]['tipo']=$data->tipo;
				$persona[$i]['direccion']=$data->direccion;
				$persona[$i]['id_usuario']=$data->id_usuario;
				$persona[$i]['username']=$data->username;
				$persona[$i]['email']=$data->email;
				$persona[$i]['user_type']=$data->user_type;
				$persona[$i]['tipo']=$data->tipo;


				$i++;
			}
			header('Location: ../vistas/personas/edit.php?mensaje='.$mensaje.'&persona='.serialize($persona));
		}else{
			$mensaje=7;
			header('Location: ../controladores/ControladorPersonas.php?operacion=index&mensaje='.$mensaje);
		}


	}

	public function update($mensaje)
	{
		# editar

		extract($_POST);
		$db=new clasedb();
		$conex=$db->conectar();

		//----verificando cédula
		$sql="SELECT * FROM personas WHERE cedula='".$cedula."' && id<>".$id_persona;//generando sql
		//echo $sql;
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$buscar1=mysqli_num_rows($resultado);//cantidad de registros

		//----verificando email
		$sql="SELECT * FROM usuarios WHERE email='".$email."' && id<>".$id_usuario;//generando sql
		//echo $sql;
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$buscar2=mysqli_num_rows($resultado);//cantidad de registros

		//----verificando username
		$sql="SELECT * FROM usuarios WHERE username='".$username."' && id<>".$id_usuario;//generando sql
		//echo $sql;
		$resultado=mysqli_query($conex,$sql);//ejecutando sql
		$buscar3=mysqli_num_rows($resultado);//cantidad de registros






		if($buscar1>0){
			$mensaje=1;
			header('Location: ../controladores/PersonasController.php?operacion=edit&mensaje='.$mensaje.'&id_persona='.$id_persona);
		}else{
			if($buscar2>0){
				$mensaje=2;
				header('Location: ../controladores/PersonasController.php?operacion=edit&mensaje='.$mensaje.'&id_persona='.$id_persona);
			}else{
				if($buscar3){
					$mensaje=3;
					header('Location: ../controladores/PersonasController.php?operacion=edit&mensaje='.$mensaje.'&id_persona='.$id_persona);	
				}else{
					//registrando el usuario
					
					$sql="UPDATE usuarios SET username='".$username."',email='".$email."' WHERE id=".$id_usuario;
					$resultado1=mysqli_query($conex,$sql);//ejecutando sql
					
					//registrando la persona
					$sql="UPDATE personas SET nombres='".$nombres."',apellidos='".$apellidos."',cedula='".$cedula."',tipo='".$tipo."',direccion='".$direccion."' WHERE id=".$id_persona;
					$resultado2=mysqli_query($conex,$sql);//ejecutando sql
					
					if($resultado1 && $resultado2){
						$mensaje=8;
					header('Location: ../controladores/PersonasController.php?operacion=index&mensaje'.$mensaje);		
					}else{
						$mensaje=9;
					header('Location: ../controladores/PersonasController.php?operacion=index&mensaje'.$mensaje);		
					}
				}
			}
		}

	}

	public function destroy($mensaje)
	{
		# eliminar
	}

	public static function controlador($operacion,$mensaje)
	{
		$persona=new PersonasController();
		switch ($operacion) {
			case 'index':
				$persona->index($mensaje);
				break;
			case 'create':
				$persona->create($mensaje);
				break;
			case 'store':
				$persona->store($mensaje);
				break;
			case 'edit':
				$persona->edit($mensaje);
				break;
			case 'update':
				$persona->update($mensaje);
				break;
			default:
				# code...
				break;
		}
	}
	

}//fin de la clase

if (!empty($operacion)) {
	if (!empty($mensaje)) {
		PersonasController::controlador($operacion, $mensaje);
	}else{
		PersonasController::controlador($operacion, 0);
	}
} else {
	header('../home.php');
}



?>