<?php

require_once "Persona.php";
class Alumno extends Persona{

    private $_nie;


    public function saluda(){
        echo parent::saludo();
        echo "soy alumno"; 
    }


    



}


?>