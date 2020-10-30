<?php
require_once 'clasedb.php';

class helper{

public function mensajes($opcion){
	switch($opcion){
		case 1:
			return "La cédula ya ha sido registrada";
		break;
		case 2:
			return "La email ya ha sido registrado";
		break;
		case 3:
			return "La username ya ha sido registrado";
		break;
		case 4:
			return "Registro exitoso!!!";
		break;
		case 5:
			return "Falla en el registro, intente otra vez!!";
		break;
		default:
			return "";
		break;
	}
}
}

?>