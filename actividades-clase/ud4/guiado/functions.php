<?php
/**
 * Script con las funciones generales para nuestro proyecto
 * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
 */

 /**
  * Funcion para limpiar los datos de entrada en un formulario
  * @param mixed $data
  * @return string
  */
 function clearData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }