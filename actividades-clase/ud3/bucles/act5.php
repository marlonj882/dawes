<?php
$mes = 9;  // Septiembre
$anio = 2024;

$diaActual = date("j");

$festivos = [
    15,
    20,
];

echo "<table border='1' style='border-collapse: collapse; width: 200px;'>";
echo "<tr><th colspan='7' style='text-align: center;'>$mes/$anio</th></tr>";
echo "<tr>
        <th>Dom</th>
        <th>Lun</th>
        <th>Mar</th>
        <th>Mié</th>
        <th>Jue</th>
        <th>Vie</th>
        <th>Sáb</th>
      </tr>";

$primerDia = mktime(0, 0, 0, $mes, 1, $anio);
$numeroDias = date("t", $primerDia);
$primerDiaSemana = date("w", $primerDia);

echo "<tr>";
for ($i = 0; $i < $primerDiaSemana; $i++) {
    echo "<td></td>";
}

for ($dia = 1; $dia <= $numeroDias; $dia++) {
    if ($dia == $diaActual) {
        echo "<td style='background-color: green;'>$dia</td>";
    } elseif (in_array($dia, $festivos)) {
        echo "<td style='color: red;'>$dia</td>";
    } else {
        echo "<td>$dia</td>";
    }

    if (($dia + $primerDiaSemana) % 7 == 0) {
        echo "</tr><tr>";
    }
}

while (($dia + $primerDiaSemana) % 7 != 0) {
    echo "<td></td>";
    $dia++;
}
echo "</tr>";
echo "</table>";
?>
