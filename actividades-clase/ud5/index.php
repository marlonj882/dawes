<?php

/**
 * @author marlon 
 */


//  requerimos clase persona
require_once "Persona.php";
require_once "Alumno.php";


//creamos un objeto de la clase persona
$persona = new Persona("marlon", "escoto", "garcia");


//llamamos al metodo saludo
$persona->saludo();



//llamamos al metodo nombre y como lo tenemos con return tenemos que hacerlo en un eco 
echo " <br/>" . $persona->nombre();



$alumno = new Alumno("marlon","escoto","garcia" );


$alumno->saluda();