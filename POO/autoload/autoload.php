<?php


function cargaClases($class){
	require_once 'clases/'. $class. '.php';
}
spl_autoload_register('cargaClases');