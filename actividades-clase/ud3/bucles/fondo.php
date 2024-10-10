<?php
// Obtener el color de la URL
$color = isset($_GET['color']) ? $_GET['color'] : '#FFFFFF';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo de Color</title>
    <style>
        body {
            background-color: <?= htmlspecialchars($color) ?>;
            color: white;
            text-align: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Este es el color seleccionado</h1>
    <p>Valor Hexadecimal: <?= htmlspecialchars($color) ?></p>
    <a href="javascript:history.back();">Volver a la paleta</a>
</body>
</html>
