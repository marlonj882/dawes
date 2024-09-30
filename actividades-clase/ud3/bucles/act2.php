<?php
$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $suma += $i;
    }
}

echo "La suma de los números pares del 1 al 10 es: " . $suma;
?>

