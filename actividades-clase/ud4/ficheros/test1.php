<?php

/**
 * Test para comprobar el manejo del fichero de texto
 * 
 * @author Marlon
 * 
 */
include "./config.php";

$ausuarios = [];
$contadorUsuarios = [];


$file = fopen("./RegMisAlu.csv", "r");
$alumno = "";


for ($i = 0; $i < LIN_CABECERA; $i++) {
  fgets($file);
}


while (!feof($file)) {

  $alumno = fgets($file);


  $alumnos_st = str_replace($caracteres, $caracteresRemplazar, $alumno);


  $alumno_minuscula = strtolower($alumnos_st);


  $desglose = explode(" ", $alumno_minuscula);


  $nombreUsuarioBase = substr($desglose[0], 0, 2) . substr($desglose[1], 0, 2) . substr($desglose[2] ?? "", 0, 2);


  if (isset($contadorUsuarios[$nombreUsuarioBase])) {

    $contadorUsuarios[$nombreUsuarioBase]++;

    $nombreUsuario = $nombreUsuarioBase . $contadorUsuarios[$nombreUsuarioBase];
  } else {

    $contadorUsuarios[$nombreUsuarioBase] = 1;
    $nombreUsuario = $nombreUsuarioBase;
  }


  $ausuarios[] = $nombreUsuario;


  echo $nombreUsuario . "<br/>";
}

fclose($file);
