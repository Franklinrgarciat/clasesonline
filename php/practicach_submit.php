<?php 
extract($_REQUEST);


$mi_arreglo=[];
$x=0;
for ($i=$num1; $i <= $num2; $i++) { 
	if($i%2==0){
		$mi_arreglo[$x]=$i;
		$x++;
	}
}
if (count($mi_arreglo)>0) {
	for ($j=0; $j < count($mi_arreglo); $j++) { 
		echo $mi_arreglo[$j]."-";

	}
}

 ?>