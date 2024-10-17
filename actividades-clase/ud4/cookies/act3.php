<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $recordarme = isset($_POST['recordarme']);

    
    if ($recordarme) {
        setcookie("usuario", $usuario, time() + 60); 
        setcookie("contraseña", $contraseña, time() +60); 
    } else {
        
        if (isset($_COOKIE["usuario"])) {
            setcookie("usuario", "", time() - 60);
        }
        if (isset($_COOKIE["contraseña"])) {
            setcookie("contraseña", "", time() - 60);
        }
    }

    echo $usuario;
    echo $contraseña;

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act3</title>
</head>
<body>
    <form method="post" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario">
        
        <label for="contraseña">Contraseña:</label>
        <input type="contraseña" id="contraseña" name="contraseña" required value="">
        
        <label>
            <input type="checkbox" id="recordarme" name="recordarme">
            Recordar mis datos
        </label>
        
        <input type="submit" name="enviar" value="enviar"/>

        <button type="submit" name="borrar">Borrar</button>
    </form>
</body>
</html>
