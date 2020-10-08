<?php 
extract($_REQUEST);

/**
 * 
 */
class EmpresaController
{
	
	public function index()
	{
		# listado
		header('Location: ../vistas/Empresa/index.php');
	}
	public static function controlador($operacion)
	{
		$tienda = new EmpresaController();
		switch ($operacion) {
			case 'index':
				$tienda->index();
				break;
			
			default:
				# code...
				break;
		}
	}

}//fin de la clase

if (!empty($operacion)) {
	EmpresaController::controlador($operacion);
} else {
	header('../home.php');
}