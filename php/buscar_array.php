<?php

//Con valor strict a false
$array=[];
$array=mi_funcion();
for($i=0;$i<count($array);$i++){
	echo $array[$i]."-";
}
function mi_funcion(){
$array = array("55", "45", "78", "17", "5");
return $array;
}
/*return 
var_export ($array);
$indice = array_search("65",$array,true);
echo "El número 5 está en el indice: " . $indice;*/
//Con valor strict a TRUE


?>
