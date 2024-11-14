<?php
/**
 * @author marlon 
 */

 include("./ejerguiadoval.php");

 $nombre=$email=$genero=$comentarios=$url="";
 $nombreE=$emailE=$generoE=$comentariosE=$urlE="";

 $cochesSeleccionados=array();
 $coloresSeleccionados=array();
 $procesaForm=false;


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="">
    <input type="text" name="nombre"></input>
    <input type="email" name="email"></input>
    <input type="text" name="url"></input>
    <textarea name="comentario" rows="" cols="">comentarios</textarea>
    <?php
    foreach ($agenero as $clave => $valor) {
        echo "<input type='radio' name='genero' value=" . $valor . '">';
    }
    
    foreach ($acoches as $clave => $valor) {
        
        echo "<input type='checkbox' name='vehiculos[]m' value=" . $valor . '">';
    }
    ?>




   </form> 
</body>
</html>