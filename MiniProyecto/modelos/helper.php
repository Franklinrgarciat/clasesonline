<?php
require_once 'clasedb.php';

class helper{

	public function mensajes($opcion){
		switch($opcion){
			case 1:
				return '<div class="alert alert-warning">La cédula ya ha sido registrada</div>';
			break;
			case 2:
				return '<div class="alert alert-warning">La email ya ha sido registrado</div>';
			break;
			case 3:
				return '<div class="alert alert-warning">La username ya ha sido registrado</div>';
			break;
			case 4:
				return '<div class="alert alert-success">Registro exitoso!!!</div>';
			break;
			case 5:
				return '<div class="alert alert-danger">Falla en el registro, intente otra vez!!</div>';
			break;
			case 6:
				return '<div class="alert alert-warning">El Código del Producto ya ha sido Registrado</div>';
			break;
			case 7:
				return '<div class="alert alert-warning">Registro no encontrado</div>';
			break;
			case 8:
				return '<div class="alert alert-success">Actualización exitosa!!!</div>';
			break;
			case 9:
				return '<div class="alert alert-success">Error en la actualización!!!</div>';
			break;
			default:
				return '';
			break;
		}
	}
	public function comparar_select($tipo,$valor){
		
		if($tipo==$valor){
			$selected=' selected="selected" ';
		}else{
			$selected='';
		}
		return $selected;
	}

}

?>