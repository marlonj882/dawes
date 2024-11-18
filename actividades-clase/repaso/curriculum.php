<?php
/**
 * 
 * Crear un formulario de creación de curriculum en el que se pida:
 * 
 *  1- Nombre y apellidos (Input text) -> No puede estar vacío y no puede contener numeros (is_numeric)
 *  2- Correo (Input email) -> Se hace una validacion de email con su filtro, y tampoco puede estar vacio
 *  3- Teléfono (Input text) -> Maximo 9 números y no puede estar vacío, ni contener letras preg_match('/[a-zA-Z]/', $variable)
 *  4- Ultimos estudios cursados (Select) -> Dejamos secundaria por valor por defecto
 *  5- Habilidades profesionales (Check box) -> No es obligatorio, aqui no mostrar ningun error
 *  6- Carnet de conducir (Radio button (si o no)) -> Si no se selecciona, indicarlo con un error
 * 
 *  Importante dejar guardados los que ya se rellenaron.
 * 
 *  Se hará uso del clearData para limpiar los datos introducidos
 *  Extra (al final veremos como subir un archivo si nos da tiempo y asi practicamos archivos del ultimo temario)
 * 
 *  En la página del resultado, poner un botón de volver
 */

include("./conf.php");
include("./functions.php");

//inicializacion de variables

$nombre = $apellidos = "";
$nombreError = $apellidosError = "";

//Creacion de banderas y procesamiento 


$ProcesaFormulario= false;
$errorValidacion=false;

// comprobar envio de formulario 

if (isset($_POST['enviar'])) {
    $ProcesaFormulario=true;

    //validacion nombre

    $nombre = clearData($_POST['nombre']);

    if (empty($nombre)) {
        $errorValidacion=true;
        $nombreError=$errores['nombrevacio'];
    }

    $apellidos = clearData($_POST['apellidos']);


}

if (isset($_POST['enviar'])) {
    $ProcesaFormulario=true;

    //validacion apellidos

    $apellidos = clearData($_POST['apellidos']);

    if (empty($apellidos)) {
        $errorValidacion=true;
        $apellidosError=$errores['apellidos'];
    }

    $apellidos = clearData($_POST['apellidos']);

}


if ($errorValidacion) {
    
    $ProcesaFormulario=false;

}


if ($ProcesaFormulario && !$errorValidacion) {
    echo "<h2>mi curriculum </h2>";
    echo "nombre: ". $nombre . "<br>";
    echo "apellidos: ". $apellidos . "<br>";

    echo    "<form method='post'>";
    echo "<input type='submit' value='volver' name = 'volver'>";
    echo "<form/>";

    if (isset($_POST['volver'])){
        header("Location: curriculum.php");
        exit();
    }
}



else{


 
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>repaso</title>
</head>
<body>
    <h1>Repaso examen</h1>
    <p class="error">los campos con * son obligatorios</p>
    
    <!-- Estructura al formulario -->

    <form action="" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre" value="<?php $nombre ?>">
    <span>*<?php echo $nombreError ?></span>
    <br><br><br>
    
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" placeholder="Apellidos" value="<?php $apellidos; ?>">
    <span>*<?php echo $apellidosError ?></span>
    <br><br><br>

    <input type="submit" value="enviar" name="enviar">


    </form>


</body>
</html>

<?php } ?>