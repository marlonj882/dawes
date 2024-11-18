<?php


/**
 * @author marlon
 */

 require_once "Contador.php";

 $contadori=Contador::ninstancias();

 echo $contadori;

 $contador1 = new Contador();
 $contador2 = new Contador(100);

echo $contador1;





?>