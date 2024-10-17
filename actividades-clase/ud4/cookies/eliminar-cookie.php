<!-- Escriba una pagina que permita crear una cookie de duracion limitada, comprobar el estado de la cookie y destruirla. -->

<?php

//crear cookie
echo "inicio";
echo "<br>";

//mostrar cookkie
if(isset($_COOKIE["cookie"])){
    setcookie("cookie","borrada",time()-1);
    echo "cookie borrada";
  
}

echo "<br>";

echo "fin";
?>