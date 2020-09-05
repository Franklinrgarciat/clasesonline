<?php 
extract($_REQUEST);
$calculo1 = true;
$calculo2 = true;
if (!empty($base) && !empty($altura)) {
	$base = $base;
	$altura = $altura;
	$calculo1 = $base * $altura;
	$calculo1 = true;
}else{
	$calculo1 = false;
}
if (!empty($radio)) {
	$radio = $radio
	$calculo2 = 3,14 * pow($radio, 2);
	$calculo2 = true;
}else{
	$calculo2 = false;
}
?>

