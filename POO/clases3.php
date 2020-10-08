<?php 

echo "<h1> TRAIT en POO </h2>";

trait Funcion{
	public function MostrarDatos(){
		echo "<h3> El Nombre es : ".$this->nombre."</h3>";
	}
} 

class Persona{
	public $nombre = 'Frankklin';
	public $cedula = 95756273;
	use Funcion;
}
class Auto{
	public $nombre = 'B5';
	public $marca = 'BMW';
	use Funcion;
}
class Juego{
	public $nombre = 'FIFA20';
	public $categoria = 'Deportes';
	use Funcion;
}
$new = new Persona();
echo $new->MostrarDatos();

$carro = new Auto();
echo $carro->MostrarDatos();
$game = new Juego();
echo $game->MostrarDatos();

echo "<br><hr><br>";
echo "<h1> DESTRUCTOR en POO </h2>";

class Usuario{
	public $nombre;
	public $apellido;

	public function __construct(){
		echo "HOLA, ESTOY CREANDO EL OBJETO<br>";
	}
	public function __destruct(){
		echo "<br>ADIOS, YA DESTRUI EL OBJETO";
	}
}
$person = new Usuario();
for ($i=0; $i <= 5 ; $i++) { 
	echo $i." - ";
}




