<?php
echo "<br><hr><br>";
echo "<h1> CALL en POO </h2>";

class registrar{
	// creando las propiedades...
	private $persona;
	private $datos;
	private $identidad;
// crando el constructor y asignando su valor
	public function __construct($persona, $datos, $identidad){
	$this->persona = $persona;
	$this->datos = $datos;
	$this->identidad = $identidad;	
	}
	// como llamar un metodo si no existe...
	public function __call($name,$arguments){
		$prefijo = substr ($name, 0, 3);
		if ($prefijo == ('get')) {
			$m_nombre = substr(strtolower($name),3);
		if (!isset($this->$m_nombre)) {
			return "El Metodo no Existe";
		}
		return $this->$m_nombre;
		
		}else{
			return "El Metodo no Existe";
		}
	
	}
}
$nuevo = new registrar('Frank', 'Ven', 25);
echo $nuevo->getPersona();
echo $nuevo->getDatos();
echo $nuevo->getIdentidad();
echo $nuevo->getIdentidadd();





