<?php 

 class clasedb{
 	private $db;
 	public function conectar(){
 		$this->db= new mysqli("localhost","root", "" ,"sistema_franklin") or die ("No se pudo conectar con Mysql");

 		return $this->db;
 	}

 	}
 ?>