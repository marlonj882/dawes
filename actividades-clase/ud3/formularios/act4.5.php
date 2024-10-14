<?php
// Inicialización de variables
$sum = 0;
$numbers = [];
$numberCount = 0;

// Manejar el envío del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el número de números a sumar
    $numberCount = intval($_POST['numberCount']);

    // Validar que el conteo de números sea mayor que cero
    if ($numberCount > 0) {
        // Obtener los números a sumar
        for ($i = 1; $i <= $numberCount; $i++) {
            if (isset($_POST["number_$i"])) {
                $numberValue = intval($_POST["number_$i"]);
                $numbers[] = $numberValue;
                $sum += $numberValue; // Sumar el número
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumador de Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .number-input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1>Sumador de Números</h1>

<form method="POST">
    <label for="numberCount">¿Cuántos números quieres sumar?</label>
    <input type="number" id="numberCount" name="numberCount" min="1" required>
    <input type="submit" value="Enviar">
</form>

<?php if ($numberCount > 0): ?>
    <form method="POST">
        <input type="hidden" name="numberCount" value="<?php echo $numberCount; ?>">
        <?php for ($i = 1; $i <= $numberCount; $i++): ?>
            <div class="number-input">
                <label for="number_<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
                <input type="number" id="number_<?php echo $i; ?>" name="number_<?php echo $i; ?>" required>
            </div>
        <?php endfor; ?>
        <input type="submit" value="Calcular Suma">
    </form>
<?php endif; ?>

<?php if ($sum > 0): ?>
    <h2>Resultado:</h2>
    <p>La suma de los números es: <?php echo $sum; ?></p>
<?php endif; ?>

</body>
</html>
