<?php
// Inicializa variables para almacenar mensajes de éxito o error
$message = '';

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : 'No especificado';
    $intereses = isset($_POST['intereses']) ? $_POST['intereses'] : [];
    $nivel_estudios = htmlspecialchars($_POST['nivel-estudios']);
    $experiencia = isset($_POST['experiencia']) ? $_POST['experiencia'] : [];
    
    // Manejo de la foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        // Aquí puedes procesar la imagen si lo deseas
        $foto = $_FILES['foto']['name']; // Solo para mostrar el nombre
    } else {
        $foto = 'No se subió ninguna foto';
    }

    // Aquí podrías guardar los datos en una base de datos o enviarlos por correo
    $message = 'Formulario enviado con éxito!'; // Mensaje de éxito
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Currículum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], select, input[type="file"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"] {
            padding: 10px 15px;
            margin-right: 10px;
            cursor: pointer;
        }
        .message {
            color: green;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h1>Formulario de Currículum</h1>

<?php if ($message): ?>
    <div class="message"><?php echo $message; ?></div>
<?php endif; ?>

<form id="curriculum-form" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>

    <div class="form-group">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label>Género:</label>
        <label><input type="radio" name="genero" value="masculino"> Masculino</label>
        <label><input type="radio" name="genero" value="femenino"> Femenino</label>
        <label><input type="radio" name="genero" value="otro"> Otro</label>
    </div>

    <div class="form-group">
        <label>Intereses:</label>
        <label><input type="checkbox" name="intereses[]" value="programacion"> Programación</label>
        <label><input type="checkbox" name="intereses[]" value="diseño"> Diseño</label>
        <label><input type="checkbox" name="intereses[]" value="marketing"> Marketing</label>
    </div>

    <div class="form-group">
        <label for="nivel-estudios">Nivel de Estudios:</label>
        <select id="nivel-estudios" name="nivel-estudios" required>
            <option value="">Seleccione un nivel</option>
            <option value="secundaria">Secundaria</option>
            <option value="bachillerato">Bachillerato</option>
            <option value="fpm">Formación Profesional Grado Medio</option>
            <option value="fps">Formación Profesional Grado Superior</option>
            <option value="universidad">Universidad</option>
        </select>
    </div>

    <div class="form-group">
        <label for="experiencia">Experiencia Laboral (Selecciona):</label>
        <select id="experiencia" name="experiencia[]" multiple required>
            <option value="junior">Junior</option>
            <option value="medio">Medio</option>
            <option value="senior">Senior</option>
        </select>
    </div>

    <div class="form-group">
        <label for="foto">Subir Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*">
    </div>

    <div class="form-group">
        <input type="submit" value="Enviar">
        <input type="reset" value="Resetear">
    </div>
</form>

</body>
</html>
