<?php

// Almacenar tres números en variables
$num1 = 10;
$num2 = 20;
$num3 = 30;

if ($num1 <= $num2 && $num1 <= $num3) {
    echo $num1 . " ";
    if ($num2 <= $num3) {
        echo $num2 . " " . $num3;
    } else {
        echo $num3 . " " . $num2;
    }
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    echo $num2 . " ";
    if ($num1 <= $num3) {
        echo $num1 . " " . $num3;
    } else {
        echo $num3 . " " . $num1;
    }
} else {
    echo $num3 . " ";
    if ($num1 <= $num2) {
        echo $num1 . " " . $num2;
    } else {
        echo $num2 . " " . $num1;
    }
}
?>

