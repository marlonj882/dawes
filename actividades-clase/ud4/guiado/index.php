<?php

/**
 * @author Carlos Borreguero Redondo    
 * Validaciond de un formulario
 */

// Incluimos el archivo de configuracion con los arrays
include ("./config.php");
include("./functions.php");

// Incializacion de las variables

$nombre = $email = $genero = $comentarios = $url = "";
$nombreError = $emailError = $generoError = $comentariosError = $errorUrl = $vehiculosError = "";
$confirmado1 = "";
$confirmado2 = "";

$aCochesSeleccionados = array();
$aColoressSeleccionados = array();
$procesarForm = false;
$errorValidacion = false;

if(isset($_POST['enviar'])){
    $procesarForm = true;
    $nombre = clearData($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
    $comentarios = clearData($_POST['comentarios']);
    $aCochesSeleccionados = $_POST['coches']; // Para que se queden guardados en checkbox

    if(empty($nombre)){
        $errorValidacion = true;
        $nombreError = "El nombre no puede estar vacio";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorValidacion = true;
        $emailError = "El formato de email no es correcto";
    }
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        $errorValidacion = true;
        $errorUrl = "El formato de url no es correcto";
    }

    if (empty($_POST['genero'])){
        $errorValidacion = true;
        $generoError = "El genero es obligatorio";
    } else{
        $genero = $_POST['genero'];
    }

    if(empty($_POST['vehiculos[]'])){
        $errorValidacion = true;
        $vehiculosError = "Indicar el vehiculo es obligatorio";
    } else{
        $cochesSeleccionados = $_POST['vehiculos[]'];
    }
}

    if($errorValidacion){
        $procesarForm = false;
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="<?php $nombre ?>">
        <span class="error"><?php echo $nombreError ?></span><br/><br/>

        <label for="email">Email: : </label>
        <input type="text" name="email" value="<?php $email ?>">
        <span class="error"><?php echo $emailError ?></span><br/><br/>

        <label for="url">Url: : </label>
        <input type="text" name="url" value="<?php $url ?>">
        <span class="error"><?php echo $errorUrl?></span><br/><br/>

        <label for="comentarios">Comentarios: </label>
        <textarea name="comentarios" rows="" cols="" id=""></textarea><br/><br/>
        <label for="genero">Genero: </label>
        <?php
            foreach($aGenero as $clave => $valor){
                $confirmado1 = $valor == $genero?"checked":"";
                echo "<input type='radio' name='genero' value='$valor' $confirmado1/> $valor";       
            }
            ?>
            <span class="error"><?php echo $generoError?></span><br/><br/>

            <?php
            echo "<label>Coches:</label>";
            foreach($aCoches as $clave => $valor){
                $confirmado2 = in_array($valor, $aCochesSeleccionados) ? "checked" : "";
                echo "<input type='checkbox' name='coches[]' value='$valor' $confirmado2> $valor";
/*                 if(in_array($valor, $aCoches)){
                    $confirmado2 = "checked";
                    echo "<input type='checkbox' name='coches[]' value='$valor' $confirmado2/> $valor";              
                } */
            }
        ?>
        <span class="error"><?php echo $generoError?></span><br/><br/>


        <input type="submit" name="enviar">
    </form>
</body>
</html>