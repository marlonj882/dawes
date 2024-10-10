<div>
    <table border="2">
        <thead>
            <tr>
                <?php 
                // Colocando encabezado de la tabla
                echo "<th>Multiplicador</th>";
                for ($columna = 1; $columna <= 10; $columna++) {
                    echo "<th>$columna</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                // Generando las filas con la tabla de multiplicar
                for ($fila = 1; $fila <= 10; $fila++) {
                    echo "<tr>";
                    echo "<td>$fila</td>";
                    for ($columna = 1; $columna <= 10; $columna++) {
                        $resultado = $fila * $columna;
                        echo "<td>$resultado</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
