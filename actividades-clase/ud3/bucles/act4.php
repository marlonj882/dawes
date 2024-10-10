<?php
// Definir una paleta de colores
$colores = [
    "#FF5733" => "Rojo",
    "#33FF57" => "Verde",
    "#3357FF" => "Azul",
    "#F1C40F" => "Amarillo",
    "#8E44AD" => "Púrpura",
    "#E67E22" => "Naranja",
    "#2ECC71" => "Verde Claro",
    "#3498DB" => "Azul Claro",
    "#C0392B" => "Rojo Oscuro",
    "#D35400" => "Naranja Oscuro"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta de Colores</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Color</th>
                <th>Valor Hexadecimal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($colores as $hex => $nombre): ?>
                <tr>
                    <td style="background-color: <?= $hex ?>;">
                        <a href="fondo.php?color=<?= urlencode($hex) ?>" style="color: white; text-decoration: none;"><?= $nombre ?></a>
                    </td>
                    <td><?= $hex ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
