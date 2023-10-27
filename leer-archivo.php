<?php 

// ABRIENDO ARCHIVOS PARA LEER SU CONTENIDO

$archivo = "contenido.txt";

$archivoAbierto = fopen($archivo,"r");

$contenido = fread($archivoAbierto,filesize($archivo));

echo $contenido;

?>