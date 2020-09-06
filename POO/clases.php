<?php
/*modificadores de accesos:
public, protected,private
tipos de datos primarios: int, float, double, char, string
 tipos de datos abstractos: por ejemplo:
 C++.... struct mi_struct{
			int var1;
			int var2;
			char var3;
 			}

 		mi_struct variables;
 		variables->var1;
 		variables->var2;
*/

/*class Avion{
	public $motor="";
	public $numAlas=0;
	private $ventanas=0;
	private $capacidadPersonas=0;
	protected $clases=array();

	//tienen por defecto un constructor
	//que es un constructor: es la funcion que permite instanciar una clase
	//instancia es igual a objeto.........
	

	//funciones
	public function transportar(){

	}
	public static function encender_motores(){

	}
	

}//final de clase
	$franklin = new Repartidor();
	$mi_obj = new Coche('Fox','amarillo',250);
class Coche{
     
    // Atributos
    public $modelo;
    public $color;
    public $velocidad;
     
    // Constructor
    public function __construct($m,$c,$v){
        $this->modelo = $m;
        $this->color = $c;
        $this->velocidad = $v;
    }
     
    //Métodos
    public function getColor(){
// Devolvemos un atributo
        return $this->color;
    }
     
    public function setColor($color){
//Le damos un valor a un atributo
        $this->color = $color;
    }
     
    public function acelerar(){
        $this->velocidad++;
    }
     
    public function frenar(){
        $this->velocidad--;
    }
     
    public function getVelocidad(){
        return $this->velocidad;
    }
     
    public function mostrarInfo(){
         
        // Llamamos a otros métodos
        $info = "<h1>Información del coche:</h1>";
        $info.= "Modelo: ".$this->modelo;
        $info.= "<br/> Color: ".$this->getColor();
        $info.= "<br/> Velocidad: ".$this->getVelocidad();
         
        return $info;
    }
}
*/
class Repartidor{
    // atributos
    public $capacidad;
    public $moto;
    public $persona;

    // Constructor
    public function __construct($moto){
        $this->moto = $m;

    // funciones
    public function Rapidez(){

    }
    public function transportar(){

    }
}
$characo = new Repartidor(true);

