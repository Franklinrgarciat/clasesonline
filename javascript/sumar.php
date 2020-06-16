<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sumar</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1><a href="index.php" >Volver</a></h1>
	
	<h2>SUMANDO VARIOS VALORES</h2>
	<input type="button" name="agregar" id="agr" value="AGREGAR">
	<ul id="uno">
		<li>1</li>
	</ul>
	<table id="mitabla">
	<thead>
		<tr>
			<th>Campos</th>
			<th>Operaciones</th>
			<th><input type="button" name="sumar" value="sumar"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<input type="number" name="numero" id="1" value=""placeholder="ingrese el numero">
			</td>
			<td colspan="2">
			<input type="button" name="agregar" id="agregar" value="+">
	
		</td>
		</tr>
	</tbody>
</table>

	
</body>
<script src="jquery.js" type="text/javascript"></script>
<script src="js.js" type="text/javascript"></script>
</html>