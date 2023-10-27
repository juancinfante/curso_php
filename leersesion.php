<?php 

session_start();

if(isset($_SESSION["user"])){
    echo "Usuario: ".$_SESSION["user"]." Estatus: ".$_SESSION["status"];
}else{
    echo "No hay sesion iniciada";
}


?>