<?php
$mes = 8;
$anyo = 2004;

// Determinar el número de días del mes usando switch
switch ($mes) {
    case 1: // Enero
    case 3: // Marzo
    case 5: // Mayo
    case 7: // Julio
    case 8: // Agosto
    case 10: // Octubre
    case 12: // Diciembre
        $dias = 31;
        break;

    case 4: // Abril
    case 6: // Junio
    case 9: // Septiembre
    case 11: // Noviembre
        $dias = 30;
        break;

    case 2: // Febrero
        // Verificar si es un año bisiesto
        if (($año % 4 == 0 && $año % 100 != 0) || ($año % 400 == 0)) {
            $dias = 29; // Año bisiesto
        } else {
            $dias = 28; // Año no bisiesto
        }
        break;

    default:
        $dias = "Mes no válido";
        break;
}

echo "El mes $mes del año $anyo tiene $dias días.";
?>
