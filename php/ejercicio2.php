<?php

/* escribir un script en PHP que muestre por pantalla todos los numeros pares del 1 al 100.*/
for($i=1;$i<=100;$i++){

	if ($i%2==0){

	echo $i." -";
	}
}
echo "<hr>";

//escribir un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo) de los 20 primeros numeros naturales. utilizando bucle while.
$contador =0;
while($contador<=20){
	$cuadrado = $contador*$contador;
	echo "el cuadrado ".$contador." es el $cuadrado"." - ";
	$contador++;
}
echo "<br><hr>";
//utilizando bucle for

for ($contador=0;$contador<=20;$contador++){
	$cuadrado=$contador*$contador;
	echo "el cuadrado de $contador es igual $cuadrado";
}

echo "<br><hr>";
//recoger dos numeros por la url (parametro get) y hacer todas las operaciones basicas de una calculadora de esos dos numeros

if (isset($_GET['nume1'])&& isset($_GET['nume2'])){
$nume1= $_GET['nume1'];
$nume2= $_GET['nume2'];

echo "Suma: ".($nume1+$nume2)."<br>";
echo "Resta: ".($nume1-$nume2)."<br>";
echo "Multiplicacion: ".($nume1*$nume2)."<br>";
echo "Division: ".($nume1/$nume2)."<br>";
}else{
echo "<h1> Ingrese los valores correctamente por la URL</h1>";
}
echo "<hr><br>";

//un programa que muestre todos los numeros entre dos numeros que nos lleguen por la UrL, utilizado ($_GET)


if (isset($_GET['num1'])&& isset($_GET['num2'])){
$num1= $_GET['num1'];
$num2= $_GET['num2'];

if($num1<$num2){

for($i=$num1; $i<=$num2;$i++){
	echo "<h4>$i</h4>";
}
}else{
	echo "el numero 1 debe ser menor al num 2";
	}
}else{
	echo "<h1>Los parametros no existen</h1>";
}
echo "<br><hr>";




// mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10
echo "<table border='1'><tr>";
echo "<tr>";

	for ($x=1;$x<=10;$x++){
		echo "<td>tabla $x</td>"." ";
	}

echo "</tr>";

echo "<tr>";
for ($a=1;$a<=10;$a++){
		echo "<td>";
			for ($x=1; $x<=10; $x++){
				echo "$a x $x= ".$a*$x."<br>";
			}
		echo "</td>";
	}
	


echo "</tr>";
echo "</table>";


echo "<br><hr>";
//hace un programa que muestre todos los numeros IMPARES entre dos numeros ingresados por la URL

if (isset($_GET['numb1'])&& isset($_GET['numb2'])){
$numb1= $_GET['numb1'];
$numb2= $_GET['numb2'];

if($numb1<$numb2){

for($i=$numb1; $i<=$numb2;$i++){
if ($i%2 !=0){
	echo "<h4>$i Es impar</h4>";
}else{
	echo "<h4>$i Es Par</h4>";
}
}
}else{
	echo "el numb 1 debe ser menor al numb 2";
	}
}else{
	echo "<h1>Los parametros no existen</h1>";
}
echo "<br><hr>";

$equipo="      real madrid club de futbol       ";
$jugador="karim benzema";
$posicion="delantero centro o media punta";
$nacionalidad="frances";
$continente="europeo";
echo "la longitud de $equipo es :".$equipo=strlen($equipo)."<br>";
echo "la longitud de $jugador es : ".$jugador=strlen($jugador)."<br>";
echo "la longitud de $posicion es : ".$posicion=strlen($posicion)."<br>";
echo "la nacionalidad sin letra A es igual : ".$nacionalidad=str_replace('a','i',$nacionalidad)."<br>";
echo "Europa sin O es igual a:  " .$continente=str_replace('o','a', $continente)."<br>";

echo "<br><hr>";
// Para comprar una casa es necesario tener el dinero suficiente, y ser venezolano; verificar los datos del cliente antes de hacer la compra.
$nombre= "adrian";
$caja=20.000;
$cuenta=20.000;
$nacionalidad = "venezolano";
if($nacionalidad == "venezolano" && $cuenta >= $caja){
	echo "$nombre puede comprar porque cumple con los requisitos";
}elseif($cuenta < $caja && $nacionalidad == "venezolano"){
	echo "$nombre es $nacionalidad pero no tiene el dinero suficiente";
}elseif($caja <= $cuenta && $nacionalidad != "venezolano"){
	echo "$nombre tiene el dinero suficiente, pero no es Venezolano";
}elseif($cuenta < $caja && $nacionalidad != "venezolano"){
	echo "el cliente no reune los requisitos";
}
echo "<br><hr>";

//crear dos variables pais y continente e impremir su valor por pantalla

$pais="Argentina"; //string
$continente="America del sur"; //string
echo $pais."<br>";
echo $continente."<br>";

?>