<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 20px;
        }
        th {
            background-color: lightgray;
        }
        a {
            text-decoration: none;
            color: black;
            display: block;
            width: 100%;
            height: 100%;
        }
        form {
            font-size: 1.2em;
        }
        input[type="number"] {
            width: 60px;
            padding: 5px;
            font-size: 1em;
            margin: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 1em;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    
    $mes = isset($_POST['mes']) ? $_POST['mes'] : date('n');
    $anio = isset($_POST['anio']) ? $_POST['anio'] : date('Y');

    
    $festivosNacionales = [1, 15]; 
    $festivosComunidad = [20]; 
    $festivosLocales = [10]; 

    echo "<form method='POST' action=''>
            <label for='mes'>Mes:</label>
            <input type='number' name='mes' id='mes' value='$mes' min='1' max='12'>
            <label for='anio'>Año:</label>
            <input type='number' name='anio' id='anio' value='$anio' min='1900'>
            <input type='submit' value='Mostrar Calendario'>
          </form>";

    $primerDia = mktime(0, 0, 0, $mes, 1, $anio);
    $numeroDias = date("t", $primerDia);
    $primerDiaSemana = date("w", $primerDia);

    echo "<table>";
    echo "<tr><th colspan='7' style='font-size: 1.5em;'>$mes/$anio</th></tr>";
    echo "<tr>
            <th>Dom</th>
            <th>Lun</th>
            <th>Mar</th>
            <th>Mié</th>
            <th>Jue</th>
            <th>Vie</th>
            <th>Sáb</th>
          </tr>";

    
    echo "<tr>";
    for ($i = 0; $i < $primerDiaSemana; $i++) {
        echo "<td></td>";
    }

    for ($dia = 1; $dia <= $numeroDias; $dia++) {
        $color = '';
        if (in_array($dia, $festivosNacionales)) {
            $color = 'style="background-color: red;"';
        } elseif (in_array($dia, $festivosComunidad)) {
            $color = 'style="background-color: orange;"';
        } elseif (in_array($dia, $festivosLocales)) {
            $color = 'style="background-color: yellow;"';
        }

        $url = "mostrar_fecha.php?dia=$dia&mes=$mes&anio=$anio";
        echo "<td $color><a href='$url'>$dia</a></td>";

        
        if (($dia + $primerDiaSemana) % 7 == 0) {
            echo "</tr><tr>";
        }
    }

    
    while (($dia + $primerDiaSemana) % 7 != 1) {
        echo "<td></td>";
        $dia++;
    }

    echo "</tr>";
    echo "</table>";
    ?>
</div>
</body>
</html>
