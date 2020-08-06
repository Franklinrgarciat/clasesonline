<?php 
extract($_REQUEST);


$mi_arreglo=[];
for ($i=0; $i <= $numero; $i++) { 
	$mi_arreglo[$i]=$i;
}
for ($i=0; $i <= $numero; $i++) { 
	echo $mi_arreglo[$i]."-";
}

 ?>