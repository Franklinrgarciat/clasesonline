<?php 
// Abrir Archivo
/*$archivo = fopen("fichero1.txt", "a+");
// recorrer archivo
while (!feof($archivo)) {
	//leer Contenido
$contenido = fgets ($archivo);
echo $contenido. "<br>";
}
//escribir dentro del archivo
fwrite($archivo, "soy un texto metido en un archivo desde php <br>");
//cerrar archivo
fclose ($archivo);*/

/*copy('fichero1.txt', 'fichero2.txt') or die ("Error al copiar");*/


//rename('fichero2.txt', 'fiche.txt');

//unlink('fiche.txt') or die('error a eliminar');

if (file_exists('fichero1.txt')) {
	echo "El archivo si existe";
}else{
	echo "el archivo no existe";
}






 ?>