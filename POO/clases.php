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
/*class Repartidor{
    // atributos
    public $capacidad;
    public $moto;
    public $persona;

    // Constructor
    public function __construct($moto){
        $this->moto = $moto;

    // funciones
    public function Rapidez(){

    }

    public function transportar(){

    }
}
$characo = new Repartidor(true);
*/
echo "<h2>EJERCICIO 1</h2>";
// Creando clase
class SuperMercado{
 // Creando Tributos
    public $productos = 'comida';
    public $empleado = 'Personal en General'; 
    public $secciones = 'Salon de Ventas';
    public $almacen = 'Deposito';
    public $transporte = 'Camiones';


   /* public function __construct(){

    }*/
// Creando metodos o Funciones
    //métodos setters y getters
    public function Atender($empleado){
        $this->empleado = $empleado;
    }
    public function Vender($productos){
        $this->productos = $productos;
    }
    public function Transportar($transporte){
        $this->transporte = $transporte;
    }
    public function setAbastecer($almacen){
        $this->almacen = $almacen;
    }
    public function getOrdenar($secciones){
        $this->secciones = $secciones;
    }

}
//fin de la clase

// Creando objetos 1.
$frankklin = new SuperMercado();
var_dump($frankklin);
// Creando objetos 2.
$frankklin2 = new SuperMercado();
$frankklin2->setAbastecer('Depositario');
$frankklin2->getOrdenar('Mercancia');
$frankklin2->Vender('Alcohol');
$frankklin2->Transportar('Empleados');
var_dump($frankklin2);


echo "<br><br><hr>";
echo "<h2>EJERCICIO 2</h2>";
// Creando clases
class Programadores{
 // Creando ATributos
    public $Persona = 'Desarrollador';
    public $Nivel = 'Junior';
    public $Especialidad = 'Front End';
// Creando Metodos
    public function Desarrollar($Persona){
        $this->Persona = $Persona;
    }
    public function Dificultad($Nivel){
        $this->Nivel = $Nivel;
    }
    public function Departamento($Especialidad){
        $this->Especialidad = $Especialidad;
    }
    
}// fin de la clase
$Frank = new Programadores();
$Characoo = new Programadores();
$Characoo->Dificultad('Senior');
$Characoo->Departamento('Bash End');

var_dump($Frank);
var_dump($Characoo);

echo "<br><br><hr>";
echo "<h2>EJERCICIO 3</h2>";
//Creando Clase
class Motocicleta{
    //Ingresando Atributos
    public $Modelo = 'Kawasaki';
    public $Color = 'Negra';
    public $Motor = 1000;
    public $Velocidad = 200;
    public $Transportar = 'Usuario';
    // Creando Funciones o Metodos
    public function getColor($color){
        return $this->Color;
    }
    public function Color($Color){
        $this->Color = $Color;
    }
    public function Encender($Motor){
        $this->Motor = $Motor;
    }
    public function Acelerar(){
        $this->Velocidad++;
    }
    public function Frenar(){
        $this->Velocidad--;
    }
    public function Viajar($Transportar){
        $this->Transportar = $Transportar;
    }
    public function getVelocidad($Velocidad){
        return $this->Velocidad;
    }
 

}// fin de la clase
// creando objeto de la clase
$Moto1 = new Motocicleta();
var_dump($Moto1);
$Moto2 = new Motocicleta();
$Moto2->Acelerar();
$Moto2->Acelerar();
$Moto2->Acelerar();
$Moto2->Acelerar();
$Moto2->Acelerar();
$Moto2->Frenar();
$Moto2->Color('Roja');
$Moto2->Viajar('Usuario2');
var_dump($Moto2);
echo "<br><br><hr>";
echo "<h2>EJERCICIO 3 con Constructor</h2>";
//creando clases
class AutoMovil{
    // Ingresando Atributos
    public $Marca;
    public $Modelo;
    public $Color;
    public $Velocidad;
    public $Motor;
    public $Usuario;

    public function __construct($Marca, $Modelo, $Color, $Velocidad, $Motor, $Usuario){
        $this->Marca = $Marca;
        $this->Modelo = $Modelo;
        $this->Color = $Color;
        $this->Velocidad = $Velocidad;
        $this->Motor = $Motor;
        $this->Usuario = $Usuario;
    }
    public function Encendido($motor){
        $this->Motor = $Motor;
    }
    public function Arranque($Velocidad){
        $this->Velocidad = $Velocidad;
    }
    public function Colores($color){
        $this->Color = $Color;
    }
    public function Viajes($Usuario){
        $this->Usuario = $Usuario;
    }
  /*  public function MostrarInformacion($miobjeto){
        $Informacion = "<h2>Este es un Objeto Mostrado por un tipado</h2>";
        $Informacion .= "Marca: ".$miobjeto->Marca;
        $Informacion .= "<br>Modelo: ".$miobjeto->Modelo;
        $Informacion .= "<br>Color: ".$miobjeto->Color;

        return $Informacion;
    }*/
}//fin de las clases...
// creando Objetos.
$Auto1 = new AutoMovil('BMW','M23','Azul', 300,'5 Cilindros','Characo');
$Auto2 = new AutoMovil('Audi','A5','Verde', 250,'4 Cilindros','Cesar');
$Auto3 = new AutoMovil('Ford','4runner','Amarillo', 320,'6 Cilindros','Frank');
$Auto4 = new AutoMovil('Seat','r2','Negro', 350,'5 Cilindros','Agustin');
$Auto5 = new AutoMovil('BMW','k5','Azul', 250,'5 Cilindros','Jorge');
/*
echo $Auto1->MostrarInformacion($Auto1);*/
var_dump($Auto1);
var_dump($Auto2);
var_dump($Auto3);
var_dump($Auto4);
var_dump($Auto5);

echo "<br><br><hr>";
echo "<h2>EJERCICIO 4</h2>";
echo "<h3>EJERCICIO con Herencia de clases.</h3>";
// Creando clase
class Persona{
// Creando Atributos
    public $Nombre;
    public $Apellido;
    public $Altura;
    public $Edad;

    // creando metodos o funciones
    public function getNombre(){
        return $this->$Nombre;
    }
    public function getApellido(){
        return $this->$Apellido;
    }
    public function getAltura(){
        return $this->$Altura;
    }
    public function getEdad(){
        return $this->$Edad;
    }
     public function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }
    public function setApellido($Apellido){
        $this->Apellido = $Apellido;
    }
    public function setAltura($Altura){
        $this->Altura = $Altura;
    }
    public function setEdad($Edad){
        $this->Edad = $Edad;
    }
    public function Hablar(){
        return "Hola estoy Hablando";
    }
    public function Caminar(){
        return "Estoy Caminando";
    }
}
// segunda clase
class Informatico extends Persona{
    public $Developer;
    public $Experiencia;
// creando metodos
    public function __construct(){
        $this->Developer = 'JS,CSS,PHP';
        $this->Experiencia = 3;
    }
    public function Programar($Developer){
        $this->Developer = $Developer;
    }
    public function ServicioTecnico(){
        return "Reparacion de ordenadores";
    }
    public function Redes(){
        return "Instalacion de Redes de Navegacion";
    }
}
// tercera clase
class TecnicoRedes extends Informatico{
    public $ServiRedes;
    public $Instaladores;

    public function __construct(){
        parent::__construct();
        $this->ServiRedes = 'EmpresaX';
        $this->Instaladores= 'Modem';
    }

    public function Cables($ServiRedes){
        $this->ServiRedes = $ServiRedes;
    }

}
$Persona = new Persona();
$Persona->setNombre('Javier');
$Persona->setApellido('Oropeza');
$Persona->setAltura('1.75');
$Persona->setEdad(39);
echo "Mostrando primer Objeto<br>";
var_dump($Persona);
echo "Mostrando segundo Objeto heredando<br>";
$Informatico = new Informatico();
var_dump($Informatico);
echo "Mostrando tercer Objeto heredando<br>";
$TecnicoRedes = new TecnicoRedes();
$TecnicoRedes->setNombre('Tovar');
$TecnicoRedes->setAltura(1.74);
var_dump($TecnicoRedes);

echo "<br><br><hr>";
echo "<h3>EJERCICIO 5 - Acceso a Prop. Estaticas</h3>";
//creando clase
class Configuracion{
    // creando Atributos
    public static $Color;
    public static $Volumen;
    public static $contraste;
// Creando Metodos o funciones
    public static function setCambio($color){
        self::$Color=$color;
    }
    public static function setConfi(){
        self::$Volumen=230;
    }
    public static function setConfig($volumen,$contraste){
        self::$Volumen=$volumen;
        self::$contraste=$contraste;
    }
}
Configuracion::setCambio('Amarillo');
Configuracion::setConfi();

echo Configuracion::$Color."<br>";
echo Configuracion::$Volumen."<br>";
Configuracion::setConfig(16,35);
echo Configuracion::$Volumen."<br>";
echo Configuracion::$contraste."<br>";
// revisar
echo "<br><br><hr>";
echo "<h3>EJERCICIO 6 - Variables Constantes</h3>";
class Constante{

    const URL_COMPLETA = "http://localhost";
    public $Usuario;
    public $Password;

    public function Usuario(){
        $this->$Usuario; 
    }
    public function Password(){
        $this->$Password; 
    }
}
$Usuario = new Constante();
echo $Usuario::URL_COMPLETA;
var_dump($Usuario);
echo "<br><br><hr>";
echo "<h3>EJERCICIO 7 - Clases Abstractas</h3>";

abstract class Notebook{
    public $Encender;

    abstract public function Encendido();

    public function Apagado(){
        $this->Encender = false;
    }

}
class Software extends Notebook{
    public $Software;

    public function Arrancar(){
        $this->Software = True;
    }
    public function Encendido(){
        $this->Encender = true;
    }
}
$Ordenador = new Software();
$Ordenador->Arrancar();
$Ordenador->Encendido();
$Ordenador->Apagado();
var_dump($Ordenador);

echo "<br><br><hr>";
echo "<h3>EJERCICIO 8 - Interfaces de Clases</h3>";

interface Compu{
    public function encender();
    public function guardar();
    public function apagar();
    public function desfragmentar();
}
class Imac implements Compu{
    private $modelo;

function getModelo(){
    return $this->modelo;
}
function setModelo($modelo){
    $this->modelo = $modelo;
}
public function Encender(){
    return "Hago Algo";
}
public function Guardar(){
    return "Hago Algo";
}
public function Apagar(){
    return "Hago Algo";
}
public function Desfragmentar(){
    return "Hago Algo";
}
}
$Nuevapc = new Imac();
$Nuevapc->setModelo('Nueva Imac');
var_dump($Nuevapc);

echo "<br><br><hr>";
echo "<h3>EJERCICIO 9 - Traits / Sobrecargas </h3>";

trait Utilidades{
    public function MostrarNombre(){
        echo "<h1> El Nombre es:".$this->nombre."</h1>";
    }
}
class Auto{
    public $nombre;
    public $edad;
    use Utilidades;
}
class Individuo{
    public $nombre;
    public $edad;
    use Utilidades;
}
class Game{
    public $nombre;
    public $edad;
    use Utilidades;
}
$ferrari = new Auto();
$ferrari->nombre ='Ferrari Aventador';
$ferrari->MostrarNombre();
$gente = new Individuo();
$gente->nombre ='Augusto';
$gente->MostrarNombre();
$juego = new Game();
$juego->nombre = 'Fifa20';
$juego->MostrarNombre();




