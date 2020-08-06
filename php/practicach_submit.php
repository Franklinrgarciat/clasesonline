<?php 
extract($_REQUEST);


$mi_arreglo=[];
for ($i=$num1; $i <= $num2; $i++) { 
	$mi_arreglo[$i]=$i;
}
for ($i=$num1; $i <= $num2; $i++) { 
	echo $mi_arreglo[$i]."-";
}

 ?>