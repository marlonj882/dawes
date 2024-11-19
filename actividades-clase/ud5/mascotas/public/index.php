<?php
require_once 'App\Models\Perro.php';
/* require_once '.\app\Models\Persona.php'; */

use App\Models\Perro;


//Desde php 7 es posible use app\models\{Perro, Persona}

$perro = new Perro('tana', 'negro');
echo "Dame la pata";
$perro->darPata();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->darPata();
$perro->darPata();

?>