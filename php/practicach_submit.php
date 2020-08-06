<?php 
extract($_REQUEST);


$mi_arreglo=[];
if ($num1 % 2 == 0 && $num2%2==0) {

}for ($i=$num1; $i <= $num2; $i++) { 
	$mi_arreglo[$i]=$i;
}
for ($i=$num1; $i <= $num2; $i++) { 
	echo $mi_arreglo[$i]."-";
}

 ?>