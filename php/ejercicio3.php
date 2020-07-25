<?php

//crear dos variables pais y continente e impremir su valor por pantalla

$pais="Argentina"; //string
$continente="America del sur"; //string
echo "<h4>".$pais.$continente."</h4><br>";

echo "<br><hr>";

//escribir un script que muestre todos los numeros pares que hay de 1 al 100

$inicio=1;

for($inicio=1;$inicio<=100;$inicio++)
	if($inicio%2==0){

echo $inicio."  ";
}
echo "<br><hr>";
//escribir un programa que imprima por ´pantalla los cuadrados de los cuarenta primeros numeros naturales. utilizar bucle while.

/*$x=1;
while($x<=40){
	$p=$x*$x;
	echo "el cuadrado de " . $x . " es ". $p ."<br>";
	$x++;
}
echo "<br><hr>";*/

for($x=1;$x<=30;$x++){
	$p=$x*$x;
	echo "<h3>el cuadrado de $x es $p</h3><br>";
}
echo "<br><hr>";

//recoger dos numeros por la url con el parametro get, y hacer todas las operaciones basicas de una calculadora.
if (isset($_GET['num1']) && isset($_GET['num2'])){

$num1=$_GET['num1'];
$num2=$_GET['num2'];
echo "<h2>CALCULADORA</h2>";
echo "la suma de $num1 y $num2 es:".($num1+$num2)."<br>";
echo "la resta de $num1 y $num2 es:".($num1-$num2)."<br>";
echo "la multiplicacion de $num1 y $num2 es:".($num1*$num2)."<br>";
echo "la division de $num1 y $num2 es:".($num1/$num2)."<br>";


}else{
	echo "<h3>INGRESE LOS VALORES CORRECTAMENTE POR LA URL</h3>";
}
echo "<br><hr>";
// HACER UN PROGRAMA Q MUESTRE TODOS LOS NUMEROS ENTRE DOS NUMEROS QUE LLEGUEN POR LA URL
if(isset($_GET['number1'])&&isset($_GET['number2'])){

$number1=$_GET['number1'];
$number2=$_GET['number2'];
if ($number1 < $number2){

for( $n = $number1; $n <= $number2; $n++){

echo $n." - ";
}
}else{
	echo "el numero 1 debe ser menor al numero 2";
}
}else{
	echo "Ingrese los parametros CORRECTAMENTE";
}

echo "<br><hr>";

// imprimir por pantalla la tabla de multiplicar en una tabla de  html.
$c=1;
echo "<table border='1'><tr>";
echo "<tr>";
	for($x=1;$x<=10;$x++){
echo "<th>";

	echo "tabla del $x";

echo "</th>";


	}
echo "</tr>";
echo "<tr>";
	for($i=1;$i<=10;$i++){
echo "<td>";
	for ($a=1;$a<=10;$a++){

	echo "$i x $a es: ".($i*$a)."<br>";
	}

echo "</td>";

	}


echo "</tr>";
	
echo "</table>";
?>