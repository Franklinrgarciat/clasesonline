<?php
echo "<h1> Ejemplo de Tipado en POO </h2>";
class Coche{
	public $marca;
	public $color;
	public $modelo;
public function __construct($marca, $color, $modelo){
	$this->marca = $marca;
	$this->color = $color;
	$this->modelo = $modelo;
}
public function Marca($marca){
	$this->marca = $marca;
}
public function Color($color){
	$this->color = $color;
}
public function Modelo($modelo){
	$this->modelo = $modelo;
}
public Function MostrarInfo($coche12){
	if (is_object($coche12)) {
	$informacion = '<h3> informacion del Coche</h3>';
	$informacion .= 'Marca:'.$coche12->marca;
	$informacion .= '<br>Color :'.$coche12->color;
	$informacion .= '<br>Modelo:'.$coche12->modelo;
	return $informacion;	
	
	}else{
		echo "La Informacion No Corresponde al formato";
	}
	
}
}
$coche12 = new Coche('Ford', 'Negro', 'A5');
echo $coche12->MostrarInfo($coche12);
echo "<br><hr><br>";
echo "<h1> Ejemplo Herencia de clases, constructor en POO </h2>";

class Individuo{
	public $nombre;
	public $apellido;
	public $edad;
	public $estatura;

	public function __construct(){
		$this->nombre = 'Franklin';
		$this->apellido = 'Garcia';
		$this->edad = 25;
		$this->estatura = 1.75;
	}

	public function getNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getApellido(){
		$this->apellido;
	}
	public function getEdad(){
		$this->edad;
	}
	public function getEstatura(){
		$this->estatura;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function setApellido($apellido){
		$this->apellido = $apellido;
	}
	public function setEdad($edad){
		$this->edad = $edad;
	}

public function setEstatura($estatura){
		$this->estatura = $estatura;
	}
	/*public function MostrarInformacion($persona1){
		$info = '<h3> Informacion de Individuo</h3>';
		$info .= '<br>Nombre : '.$persona1->nombre;
		$info .= '<br>Apellido : '.$persona1->apellido;
		$info .= '<br>Edad : '.$persona1->edad;
		$info .= '<br>Estatura : '.$persona1->estatura;
		return $info;
	}*/


}
class Informatico extends Individuo{
	public $designer;
	public $developer;
	public function __construct(){
		parent:: __construct();

		$this->designer = 'Front-end';
		$this->developer = '4 Lenguajes';
	}

	public function Disenar($designer){
		$this->designer = $designer;
	}
	public function Desarrollar($developer){
		$this->developer = $developer;
	}
	/*public function MostrarInfo($programador){
		$informe = '<h3>Mostrando Informacion Del Programador Heredado</h3>';
		$informe .= '<br>Disenador : '.$programador->designer;
		$informe .= '<br>Desarrollador : '.$programador->developer; 
		return $informe;
	}*/

}
class Soporte extends Informatico{
	public $mantenimiento;

	public function __construct(){
		parent:: __construct();
		$this->mantenimiento = 'Software';
	}
	public function Mantener($mantenimiento){
		echo "<h3>Hola, Estoy en mantenimiento</h3>";
	}
}
/*$persona1 = new Individuo();
var_dump($persona1);
$programador = new Informatico();
var_dump($programador);*/
$people = new Soporte();
$people->setNombre('Adrian');
$people->setEdad(28);
var_dump($people);


echo "<br><hr><br>";
echo "<h1> Propiedades y Metodos estaticos. </h2>";


class Tienda{
	public static $camisas;
	public static $pantalon;
	public static $remeras;

	public static function setMarca($camisas){
		return self::$camisas = $camisas;
	}
	public static function setColor($pantalon){
		return self::$pantalon = $pantalon;
	}
	public static function setTipo($remeras){
		return self::$remeras = $remeras;
	}

}
Tienda::setMarca('Berskha');
Tienda::setColor('<br>Azul<br>');
Tienda::setTipo('Masculino');
echo Tienda::$camisas;
echo Tienda::$pantalon;
echo Tienda::$remeras;

echo "<br><hr><br>";
echo "<h1> Constantes en POO </h2>";

class Usuario{

	const PaginaWeb = 'www.FranklinGarcia.com';
	public $email;
	public $passwork;

public function Email($email){
	return $this->email = $email;
}
public function Passwork($passwork){
	return $this->passwork = $passwork;
}

}
$Usuario = new Usuario();
echo $Usuario::PaginaWeb;
var_dump($Usuario);

echo "<br><hr><br>";
echo "<h1> Clases Abstractas en POO </h2>";

abstract class Notebook{
	public $encendido;

	abstract public function Encender();

	public function Apagar(){
		$this->encendido = false;
	}
}
class Lenovo extends Notebook{
	public $software;

	public function Inicio(){
		$this->software = 'Inicio Sistema';
	}
	public function Encender(){
		$this->encendido = true;
	}
}
$pc = new Lenovo();
$pc->Inicio();
$pc->Encender();
$pc->Apagar();
var_dump($pc);

echo "<br><hr><br>";
echo "<h1> Interfaces en POO </h2>";
interface Pc{
	public function encender();
	public function apagar();
	public function reiniciar();
}
class Usuarios implements Pc{
	public $usar;

	public function Usar(){
		$this->usar = 'Esta la pc en uso';
	}
	public function encender(){
		$this->encender = 'Equipo encendido';
	}
	public function apagar(){
		$this->apagar = 'Equipo Apagado';
	}
	public function reiniciar(){
		$this->reiniciar = 'El equipo se esta reiniciando';
	}
}
$Persona = new Usuarios();
$Persona->Usar();
$Persona->encender();
$Persona->apagar();
$Persona->reiniciar();
$Persona->Usar();

var_dump($Persona);
