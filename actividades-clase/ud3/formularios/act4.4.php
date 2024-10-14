<?php
// index.php

// Definición de datos de países
$countries = [
    'francia' => ['capital' => 'París', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg'],
    'españa' => ['capital' => 'Madrid', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/9/9a/Flag_of_Spain.svg'],
    'italia' => ['capital' => 'Roma', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Flag_of_Italy.svg'],
    'alemania' => ['capital' => 'Berlín', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg'],
    'mexico' => ['capital' => 'Ciudad de México', 'flag' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Mexico.svg'],
    'brasil' => ['capital' => 'Brasilia', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/0/05/Flag_of_Brazil.svg'],
    'argentina' => ['capital' => 'Buenos Aires', 'flag' => 'https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_Argentina.svg'],
    'japon' => ['capital' => 'Tokio', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/9/9e/Flag_of_Japan.svg'],
];

// Variables para almacenar información seleccionada
$capital = '';
$flag = '';

// Manejar el envío del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedCountry = $_POST['country'];

    if (array_key_exists($selectedCountry, $countries)) {
        $capital = $countries[$selectedCountry]['capital'];
        $flag = $countries[$selectedCountry]['flag'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Países</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .country-info {
            margin-top: 20px;
        }
        img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>
<body>

<h1>Información de Países</h1>

<form method="POST" id="country-form">
    <label for="country">Selecciona un país:</label>
    <select id="country" name="country" required>
        <option value="">Seleccione un país</option>
        <option value="francia">Francia</option>
        <option value="españa">España</option>
        <option value="italia">Italia</option>
        <option value="alemania">Alemania</option>
        <option value="mexico">México</option>
        <option value="brasil">Brasil</option>
        <option value="argentina">Argentina</option>
        <option value="japon">Japón</option>
    </select>
    <input type="submit" value="Mostrar Información">
</form>

<?php if ($capital && $flag): ?>
    <div class="country-info">
        <h2>Capital: <?php echo $capital; ?></h2>
        <img src="<?php echo $flag; ?>" alt="Bandera de <?php echo ucfirst($selectedCountry); ?>">
    </div>
<?php endif; ?>

</body>
</html>
