<?php	
session_start();
    /**
     * Este programa crea un formulario con sesiones utilizando un array
     * que maneja una agenda de contactos
     * 
     * @author Marlon
     * @version 8.3.6
     */

if (!isset($_SESSION['contactos'])){
    $_SESSION["contactos"]=array();
}

$data = $_SESSION["contactos"];

if (isset($_POST['enviar'])){
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);

    // Añadimos un nuevo elemento al array. Ver array_push
    $data[] = array('nombre'=>$nombre,'email'=>$email,'telefono'=>$telefono);
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
    <h1>AGENDA</h1>
    <h2>Nuevo Contacto</h2>
    <form action="" method="post">
        Nombre   <input type="text" name="nombre" id="nombre" PLACEHOLDER="Nombre">
        Email    <input type="text" name="email" id="email" PLACEHOLDER="Email">
        Telefono <input type="number" name="telefono" id="telefono" PLACEHOLDER="Telefono">
        <input type="submit" name="enviar">
    </form>
    <h2>Lista de contactos</h2>
    <?php
        foreach($data as $persona => $datos){
            echo "Nombre: " . $datos["nombre"] . " <br> " ."Email: " . $datos["email"] . " <br> " . "Telefono: ".$datos["telefono"];
            echo "<br/>";
        }
    ?>

    <footer>
        <a href="destroy.php">Cerrar Sesion</a>
    </footer>
</body>
</html>