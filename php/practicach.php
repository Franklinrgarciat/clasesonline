<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Practica CH</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<H1>MI PRIMER FORMULARIO</H1><br>
	<form action="practicach_submit.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
		<label for="numero">NUMERO DE COMPRA</label>
		<p><input type="number" name="numero" autofocus="autofocus" minlength="2" required="requiered" placeholder="EJ: 2312"></p>
		<input type="submit" name="Enviar">
	</form>
	
</body>
</html>