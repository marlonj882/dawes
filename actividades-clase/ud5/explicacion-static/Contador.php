<?php
/**
 * @author marlon 
 */


 //creamos la clase contador
 class Contador{

    /**
     * 
     * variable privada
     * @var 
     */
    private $contador;

    /**
     * 
     * variable privada estatica
     * @var 
     */
    private static $instancia=0;


    /**
     * constructor
     * @param mixed $count
     */
    public function __construct($count=0) {
        $this->contador = $count;
        self::$instancia++;

    }

    public function contar() {
        $this->contador++;
        return $this;

 }

    public function __tostring(){

        return (string) $this->contador;

    }

    public static function ninstancias(){
        return self::$instancia;
    }


 }



?>