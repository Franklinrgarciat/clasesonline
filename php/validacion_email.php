<?php 

// validacion de email con una funcion

function validar_email($email){
	$status = "no valido"; 
	if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$status = "EMAIL VALIDO";
	}
	return $status;
	
}
	if (isset($_GET['email'])) {
		echo validar_email($_GET['email']);
	}else{
		echo "PASA UN EMAIL POR URL";
	}


 ?>