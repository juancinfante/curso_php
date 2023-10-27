<?php 

if($_POST){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    echo "Hola ".$nombre." ".$apellido;
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
<form action="ejercicio5.php" method="post">
        <input type="text" name="nombre">
        <br>
        <input type="text" name="apellido">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>