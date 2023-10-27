<?php 

    $txtNombre = "";
    $radioLenguaje= "";
    $checkPHP = "";
    $checkHTML = "";
    $checkCSS = "";
    $anime = "";
    $comentario = "";

    if($_POST){
        $txtNombre = (isset($_POST['txtnombre'])) ? $_POST['txtnombre'] : "";
        $radioLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
        
        $checkPHP = (isset($_POST['checkboxPHP']) == "true") ? "checked" : "";
        $checkHTML = (isset($_POST['checkboxHTML']) == "true") ? "checked" : "";
        $checkCSS = (isset($_POST['checkboxCSS']) == "true") ? "checked" : "";

        $anime = (isset($_POST["anime"])) ? $_POST["anime"] : "";
    
        $comentario = (isset($_POST["comentario"])) ? $_POST["comentario"] : "";
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
    
<!-- SI HAY ENVIO MUESTRA SI NO , NO -->

<?php if($_POST){?>

    <strong> Hola: </strong> <?php echo $txtNombre ?><br>
    <strong> Te gusta: </strong> <?php echo $radioLenguaje?><br>
    <strong> Estas aprendiendo: </strong>
    <?php echo ($checkPHP=="checked") ? "PHP" : "" ?>
    <?php echo ($checkHTML=="checked") ? "HTML" : "" ?>
    <?php echo ($checkCSS=="checked") ? "CSS" : "" ?>
    <br>
    <strong> El anime que te gusta: </strong> <?php echo $anime ?><br>
    <strong>Tu comentario: </strong> <?php echo $comentario?>

<?php }?>

<form action="ejercicio31.php" method="post">
    Nombre:
    <input value="<?php echo $txtNombre ?>" type="text" name="txtnombre">
    <br>
    <!-- INPUT RADIO -->
    <strong>Te gusta? </strong><br>
    php: <input type="radio" name="lenguaje"  <?php echo ($radioLenguaje=="php")? "checked": "" ?> value="php" id=""><br>
    html: <input type="radio" name="lenguaje" <?php echo ($radioLenguaje=="html")? "checked": "" ?> value="html" id=""><br>
    css: <input type="radio" name="lenguaje" <?php echo ($radioLenguaje=="css")? "checked": "" ?> value="css" id=""><br>

    <!-- INPUT CHECKBOX -->
    <strong>Estas aprendiendo... </strong><br>
    PHP: <input type="checkbox" <?php echo $checkPHP ?> name="checkboxPHP" value="true"><br>
    HTML: <input type="checkbox" <?php echo $checkHTML ?>name="checkboxHTML" value="true"><br>
    CSS:<input type="checkbox" <?php echo $checkCSS ?> name="checkboxCSS" value="true"><br>

    <!-- INPUT SELECT -->

    <strong>Que anime te gusta?</strong><br>
    <select name="anime" id="">
        <option value="">Ninguna</option>
        <option value="naruto" <?php echo ($anime=="naruto") ? "selected" : "" ?>>Naruto</option>
        <option value="dragon ball" <?php echo ($anime=="dragon ball") ? "selected" : "" ?>>Dragon Ball Z</option>
        <option value="SNK" <?php echo ($anime=="SNK") ? "selected" : "" ?>>SNK</option>
    </select><br>

    <!-- TEXTAREA -->
    
    <strong> Deja un comentario:</strong><br>
    <textarea name="comentario" id="" cols="30" rows="10"></textarea>
    

   <br><input type="submit" value="Enviar informacion">

</form>
</body>
</html>