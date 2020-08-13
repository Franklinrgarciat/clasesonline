<?php 
/*extract($_REQUEST);*/


$error= "Faltan_valores";

//Procesar fformulario; para validar que te llegue la informacion de los campos...
if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
	$error= "ok";
// declaras el valor de los inputs en una variable
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = (int) $_POST['edad'];
$email = $_POST['email'];
$pass = $_POST['pass'];

/*VALIDACION de DATOS con sus */
if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
	$error = 'nombre';
}
if (!is_string($apellido) || preg_match("/[0-9]/", $apellido)) {
	$error = 'apellido';
}
if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
	$error = 'edad';
}
if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error = 'email';
}
if (empty($pass) || strlen($pass)<5) {
	$error= 'password';
}
/*var_dump($_POST);
var_dump($error);
die();*/

}else{
	$error = "Faltan_valores";
}if ($error != 'ok') {
	header("location:formulario1.php?error=$error");
	
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORMULARIO 1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php if ($error == "ok") :?>
	<h1>DATOS VALIDADOS CORRECTAMENTE</h1>

		<p><?php  echo  $nombre ?>
		<p><?php  echo $apellido ?></p>
		<p><?php  echo $edad ?></p>
		<p><?php  echo $email ?></p>
		
	<?php endif ?>
</body>
</html>





