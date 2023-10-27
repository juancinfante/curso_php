<?php 

$server = "localhost"; // 127.0.0.1
$user = "root";
$password = "";

try{

    // CONEXION A BASE DE DATOS 
    $conexion = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexion establecida";
    
    // Insertar datos
    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'La vida misma', 'fotonueva.jpg')";
    $conexion->exec($sql);

    // LEER DATOS
    $sql = "SELECT * FROM `fotos`"; // Guardo la sentencia
    $sentencia = $conexion->prepare($sql); // Preparo 
    $sentencia->execute(); // Ejecuto
    
    $resultado=$sentencia->fetchAll(); // Obtengo los resultados
    
    print_r($resultado);

    foreach($resultado as $foto){
        print_r($foto['nombre']."<br>");
    }



    
}catch(PDOException $error){
    echo "Conexion erronea ".$error;
}

?>