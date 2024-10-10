<?php

    /**
     *
     * @author Marlon
     */


if (!isset($_POST["enviar"])){
    header("location:ejemplo4.php");
}
echo "datos de formularios: <br/>";

foreach($_POST as $clave => $valor) {
    if ($clave == "email" && !filter_var($valor, FILTER_VALIDATE_EMAIL)) {
        echo "El formato introducido no es correcto.";
    }
    echo "$valor <br/>";
}
?>