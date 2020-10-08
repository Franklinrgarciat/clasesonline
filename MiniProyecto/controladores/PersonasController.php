<?php 
extract($_REQUEST);

/**
 * 
 */
class PersonasController
{
	
	public function index()
	{
		# listado
		header('Location: ../vistas/personas/index.php');
	}

	public function Registro()
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
	public static function usuarios($operacion)
	{
		$usuarios=new PersonasController();
		switch ($operacion) {
			case 'index':
				$usuarios->Registro();
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
if (!empty($usuarios)) {
	PersonasController::controlador($usuarios);
} else {
	header('../home.php');
}


?>