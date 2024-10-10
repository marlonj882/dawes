<?php
$nums = array (1,2,3,4,5);

$cuadrado = array_map (function ($nums) {return $nums * $nums;} , $nums );

print_r($cuadrado);

?>