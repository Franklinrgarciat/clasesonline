<?php 

require_once 'autoload.php';
echo "<h3>Esto es un autoload de carga de clases</h3>";
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;
echo "<br>";
$categoria = new Categorias();
echo $categoria->accion;
echo "<br>";
echo $categoria->deportes;
