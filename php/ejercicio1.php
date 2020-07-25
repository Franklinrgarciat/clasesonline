<?php
/*

Dados 3 números entre el 0 y el 10, obtenidos aleatoriamente
determine el orden creciente de los mismos o si son iguales
los 3
*/
$frank=rand(0,10);
$cesar=rand(0,10);
$miguel=rand(0,10);


echo "Las edades son: 
<br>La edad de Frank es: ".$frank."
<br>La edad de Cesar es: ".$cesar."
<br>La edad de Miguel es: ".$miguel."<br>";

if($frank<$cesar  &&  $cesar<$miguel){
	echo "el menor es frank, el segundo es cesar, el mayor es miguel";
}elseif($frank<$miguel && $miguel<$cesar){
	echo "el menor es frank el segundo es miguel y el mayor cesar";
}elseif($cesar<$frank && $frank<$miguel){
	echo "el menor es cesar, el segundo es frank y el mayor miguel";
}elseif($cesar<$miguel && $miguel<$frank){
	echo "el menor es cesar, el segundo miguel y el mayor frank";
}elseif($miguel<$frank && $frank<$cesar){
	echo "el menor es miguel, el segundo es frank y el mayor cesar";
}elseif($miguel<$cesar && $cesar<$frank){
	echo "el menor es miguel, el segundo es cesar y el mayor frank";

}elseif($frank<$cesar&&$cesar<=$miguel){
	echo "el menor es frank, el resto iguales";
}elseif($cesar<$frank&&$frank<=$miguel){
	echo "el menor es cesar, el resto iguales";
}elseif($miguel<$cesar&&$cesar<=$frank){
	echo "el menor es miguel, el resto iguales";
}elseif($miguel>$frank&&$frank<=$cesar){
	echo "el mayor es miguel, el resto son iguales";
}elseif($frank>$cesar&&$cesar<=$miguel){
	echo "el mayor es frank, el resto son iguales";
}elseif($cesar>$miguel&&$miguel<=$cesar){
	echo "el mayor es cesar, el resto son iguales";
}elseif($frank==$cesar&&$cesar==$miguel){
	echo "TODOS SON IGUALES";
}
echo "<br><hr>";
// Para comprar una casa es necesario tener el dinero suficiente, tener la edad legal, y ser venezolano; verificar los datos del cliente antes de hacer la compra.
$nombre= "adrian";
$edad=18;
$caja=20.000;
$nacionalidad="venezolano";
if($nombre=="adrian"&&$nacionalidad=="colombiano"){
	echo "$nombre puede comprar la casa";
}elseif($nacionalidad!="colombiano"&&$edad>=18){
	echo "$nombre no es $nacionalidad, pero es mayor de edad y puede comprar";
}elseif($edad<=18&&$caja==20.000){
	echo "$nombre tiene el dinero suficiente, pero no es mayor de edad";

}elseif($frank<$cesar && $cesar==$miguel){
	echo "el menor es frank, Miguel y Cesar son los mayores";
}elseif($cesar<$frank && $frank==$miguel){
	echo "el menor es cesar, Frank y Miguel son los mayores";
}elseif($miguel<$cesar && $cesar==$frank){
	echo "el menor es miguel, y Cesar y Frank son los mayores";
}elseif($miguel==$cesar && $cesar==$frank){
	echo "Todos tienen la misma edad";
}
?>