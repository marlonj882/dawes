<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Fichero</title>
</head>
<body>
    <h1>Actividad Fichero </h1>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>
        <br><br>

        <label for="sistema">Sistema:</label>
        <select id="sistema" name="sistema" required>
            <option value="MySQL">MySQL</option>
            <option value="Linux">Linux</option>
        </select>
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>