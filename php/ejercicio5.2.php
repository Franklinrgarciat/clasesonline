<?php

extract($_REQUEST);
//echo $_POST['nombre'];
//echo $nombre." ".$apellido." ".$cedula;

if($nombre!="" && $apellido!="" && $edad!="" && $nacionalidad!="" && $cedula!="" && $monto_casa!="" && $presupuesto!=""){
		
	if ($nacionalidad=="V") {
		if ($edad>=18) {
			# verificacion cuando es mayor o igual a 50%
			$porcentaje_50=(50*$monto_casa)/100;
			$porcentaje_25=(25*$monto_casa)/100;
			if ($presupuesto>=$porcentaje_50) {
				$porcentaje_10=(10*$monto_casa)/100;
				$monto_casa+=$porcentaje_10;
				$resta=$monto_casa-$presupuesto;
				$cuotas=12;
				$cuota=$resta/$cuotas;
				$mensaje=0;
				header('Location: ejercicio5.1.php?mensaje='.$mensaje."&resta=".$resta."&cuotas=".$cuotas."&cuota=".$cuota);
			} else if($presupuesto>=$porcentaje_25) {
				$porcentaje_15=(15*$monto_casa)/100;
				$monto_casa+=$porcentaje_15;
				$resta=$monto_casa-$presupuesto;
				$cuotas=24;
				$cuota=$resta/$cuotas;
				$mensaje=0;
				header('Location: ejercicio5.1php?mensaje='.$mensaje."&resta=".$resta."&cuotas=".$cuotas."&cuota=".$cuota);
			}else{
				
				$mensaje=1;
				header('Location: ejercicio5.1php?mensaje='.$mensaje);
			}
			
		} else {
			
			$mensaje=1;
			header('Location: ejercicio5.1php?mensaje='.$mensaje);
		}
	} else {
		
		$mensaje=1;
		header('Location: ejercicio5.1php?mensaje='.$mensaje);
	}
}else{
	
	$mensaje=1;
	header('Location: ejercicio5.1php?mensaje='.$mensaje);
	
}












?>