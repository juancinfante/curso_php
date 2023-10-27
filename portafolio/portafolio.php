<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if($_POST){

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    
    // AL NOMBRE DE LA IMAGEN LE ADJUNTAMOS LA FECHA DEL MOMENTO DEL LA SUBIDA DE LA MISMA
    // $fecha = new \DateTime();
    // $nombreImagen = $fecha->getTimestamp."_".$_FILES['archivo']['name'];
    $nombreImagen = $_FILES['archivo']['name'];

    // MOVEMOS LA IMAGEN A LA CARPETA "IMAGENES"
    $imagenTemporal = $_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagenTemporal, "imagenes/".$nombreImagen);

    // ME CONECTO CON LA BASE DE DATOS
    $objConexion = new conexion();
    // PREPRARO MI SENTENIA SQL YA SEA PARA INSERTAR ELIMINAR O ACTUALIZAR
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$nombreImagen', '$descripcion');";
    // LA MANDO A EJECUTAR, LA MISMA ME DEVUELVE EL ID DEL OBJETO por ejemplo lo guardaria asi -> $id = $objConexion->ejecutar($sql);
    // PERO EN ESTE EJEMPLO SOLO QUIERO QUE SE EJECUTE Y YA
    $objConexion->ejecutar($sql);

    header("location:portafolio.php");

}

// OBTENGO TODOS LOS PROYECTOS DE LA BASE DE DATOS USANDO LA FUNCION CONSULTAR
$objConexion = new conexion();
$resultado = $objConexion->consultar("SELECT * FROM `proyectos`");


// VERIFICO SI SE ENVIO ALGO POR GET Y ELIMINO
if($_GET){
    // OBTENGO EL ID
    $id = $_GET['borrar'];
    $objConexion = new conexion();

    // BORRO LA IMAGEN DE LA CARPETA
    $imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);

    print_r($imagen[0]['imagen']);
    
    $sql = "DELETE FROM proyectos WHERE `proyectos`.`id` =".$id;
    $objConexion->ejecutar($sql);

    header("location:portafolio.php");

}

?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Datos del proyecto
                    </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre: <input type="text" name="nombre" class="form-control" id="" required><br>
                        Imagen: <input type="file" name="archivo" class="form-control" id="" required><br>
                        Descripcion: <textarea name="descripcion" class="form-control" cols="30" rows="10" required></textarea>
                        <input type="submit" value="Enviar proyecto">
                    </form>
               </div>
        </div>
            </div>
            <div class="col-md-6">
            <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead> 
            <tbody>
                <?php foreach($resultado as $proyecto){ ?>
                    <tr>
                        <td><?php echo $proyecto['id']; ?> </td>
                        <td><?php echo $proyecto['nombre']; ?></td>
                        <td>
                            <img src="imagenes/<?php echo $proyecto['imagen']; ?>" width="150" alt="">
                            </td>
                        <td><?php echo $proyecto['descripcion']; ?></td>
                        <td><a href="?borrar=<?php echo $proyecto['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    <?php }?>
            </tbody>
        </table>
            </div>
        </div>

        

    </div>
    


<?php include("pie.php"); ?>
