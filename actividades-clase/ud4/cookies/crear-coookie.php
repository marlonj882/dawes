<!-- Escriba una pagina que permita crear una cookie de duracion limitada, comprobar el estado de la cookie y destruirla. -->

<?php

//crear cookie
setcookie("cookie", "hola mundo", time() + 60);

echo "inicio";
echo "<br>";

//mostrar cookkie
if(isset($_COOKIE["cookie"])){
    echo $_COOKIE["cookie"];
}

echo "<br>";

echo "fin";
?>