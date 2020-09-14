<?php 
extract($_REQUEST);

class LoginController 
{
	
	public static function login()
	{
		extract($_POST);		
		//CONSULTAR A LA BDD

		// crear la sesion
		$_SESSION['logueado']="Si";
		header('Location: ../home.php');


	}

	public static function logout()
	{
		extract($_POST);		
		//destruir variables de sesion
		
		header('Location: ../index.php');


	}
}
if (!empty($operacion)) {
	switch ($operacion) {
		case 'login':
			LoginController::login();
			break;
		case 'logout':
			LoginController::logout();
			break;
		default:
			header('Location: ../index.php');
			break;
	}

}else{
		header('Location: ../index.php');
	}


?>