<?php 

session_start();

$_SESSION["user"]="juanc";
$_SESSION["status"]="logueado";

echo "Sesion iniciada.";
echo "Usuario: ".$_SESSION["user"]." Estatus: ".$_SESSION["status"];

?>