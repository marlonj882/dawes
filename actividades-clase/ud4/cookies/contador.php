<?php
//si no esta creada la cookie 
if (!isset($_COOKIE["contador"])){
//creamos la cookie 
setcookie("contador",0,time()+60);
}else{
    
    $valor = $_COOKIE["contador"]+1;
    setcookie("contador",$valor,time()+60);
}
echo $_COOKIE["contador"];
?>
