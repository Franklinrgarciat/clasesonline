<?php 
extract($_REQUEST);

/**
 * 
 */
class RegistroController
{

	public function Registro()
	{
		# formulario para registrar
		header('Location: ../vistas/Registro/registro.php');
	}
	public static function usuarios($operacion)
	{
		$usuarios=new RegistroController();
		switch ($operacion) {
			case 'Registro':
				$usuarios->Registro();
				break;
			
			default:
				# code...
				break;
		}
	}
	if (!empty($operacion)) {
	RegistroController::controlador($operacion);
	} else {
	header('../home.php');
	}
	}