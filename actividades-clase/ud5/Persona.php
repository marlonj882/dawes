<?php

/**
 * @author marlon 
 * 
 */
class Persona
{

    /**
     * 
     * creamos las variables necesarias
     * @var 
     */
    private $_nombre, $_apellido1, $_apellido2;

    /**
     * 
     * creamos el contructor que le entra por parametros el nombre y sus apellidos
     * @param mixed $nombre
     * @param mixed $apellido1
     * @param mixed $apellido2
     */
    public function __construct($nombre, $apellido1, $apellido2)
    {
        //$this es una pseudo variable para referenciar al objeto 
        $this->_nombre = $nombre;
        $this->_apellido1 = $apellido1;
        $this->_apellido2 = $apellido2;
    }


    /**
     * funcion que devuelve el nombre completo 
     * @return string
     */

    public function nombre()
    {
        return "Nombre: " . $this->_nombre . " Apellidos: " . $this->_apellido1 . " " . $this->_apellido2;
    }

    public function saludo()
    {
        echo "Hola mundo";
    }

    


}
