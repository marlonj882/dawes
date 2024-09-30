<?php
//fecha de nacimiento
$diaNacimiento = 26;
$mesNacimiento = 8;
$anyoNacimiento = 2004;

// Obtener la fecha actual
$diaActual = date("j");
$mesActual = date("n");
$anyoActual = date("Y");

// Calcular la edad
$edad = $anyoActual - $anyoNacimiento;

// Si aún no ha cumplido años este año, restar 1
if ($mesActual < $mesNacimiento || ($mesActual == $mesNacimiento && $diaActual < $diaNacimiento)) {
    $edad--;
}

echo "Tu edad es: " . $edad;
?>
