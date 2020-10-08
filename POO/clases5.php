<?php
echo "<h1> FUNCIONES toString en POO </h2>";

class Datos{
	public $nombre;
	public $apellido;

	public function __construct($nombre, $apellido){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}
	public function __toString(){
		return "<h4>Usted esta registrado como : ".$this->nombre." ".$this->apellido."</h4>";
	}
	public function __destruct(){
		echo "<br>ADIOS, YA DESTRUI EL OBJETO";
	}
}
$person = new Datos('Frankklin ', 'Tovar');
echo $person;
