<?php 

if($_POST){
    
    // Recibir informacion del formulario HTML [Metodo POST]
    $nombre=$_POST['txtNombre'];
    echo "Bienvenido ".$nombre;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Hola Mundo!</h4>
    <form action="ejercicio2.php" method="post">
        <input type="text" name="txtNombre">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>