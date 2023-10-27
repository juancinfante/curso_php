<?php 

$nombreArchivo = "contenido-nuevo.txt";

$contenidoArchivo = "Hola soy nuevo archivo";

$archivoACrear = fopen($nombreArchivo,"w");

fclose($archivoACrear);

?>