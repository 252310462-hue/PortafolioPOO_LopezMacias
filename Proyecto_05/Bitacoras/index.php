<?php
// Variables para almacenar mensajes de éxito o error
$mensaje_exito = "";
$mensaje_error = "";

// 1. PROCESAR EL FORMULARIO CUANDO SE ENVÍA (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y desinfectar los datos recibidos (Evita XSS y limpia espacios en blanco)
    $fecha = isset($_POST['fecha']) ? trim($_POST['fecha']) : '';
    $actividad = isset($_POST['actividad']) ? trim($_POST['actividad']) : '';
    $responsable = isset($_POST['responsable']) ? trim($_POST['responsable']) : '';

    // Validar que no se agreguen campos vacíos
    if (empty($fecha) || empty($actividad) || empty($responsable)) {
        $mensaje_error = "Todos los campos son obligatorios. Por favor, rellena el formulario.";
    } else {
        // Formatear la cadena tal y como lo solicita la actividad
        $linea_bitacora = "Fecha: " . htmlspecialchars($fecha) . "\n" .
                          "Actividad: " . htmlspecialchars($actividad) . "\n" .
                          "Responsable: " . htmlspecialchars($responsable) . "\n" .
                          "----------------------------------------\n"; // Separador visual

        // Guardar en el archivo bitacora.txt (FILE_APPEND no borra lo anterior; crea el archivo si no existe)
        if (file_put_contents("bitacora.txt", $linea_bitacora, FILE_APPEND | LOCK_EX) !== false) {
            $mensaje_exito = "¡Actividad registrada con éxito en la bitácora!";
        } else {
            $mensaje_error = "Hubo un error al intentar escribir en el archivo.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Bitácoras - Seguridad</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="date"] { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #27ae60; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #219653; }
        .alerta { padding: 10px; margin-bottom: 15px; border-radius: 4px; }
        .exito { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        pre { background: #eee; padding: 15px; border-radius: 4px; white-space: pre-wrap; word-wrap: break-word; }
    </style>
</head>
<body>

<div class="container">
    <h2>Registro de Bitácora Diaria</h2>
    
    <?php if (!empty($mensaje_error)): ?>
        <div class="alerta error"><?php echo $mensaje_error; ?></div>
    <?php endif; ?>
    
    <?php if (!empty($mensaje_exito)): ?>
        <div class="alerta exito"><?php echo $mensaje_exito; ?></div>
    <?php endif; ?>

    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
        </div>
        <div class="form-group">
            <label for="actividad">Descripción de la actividad:</label>
            <input type="text" id="actividad" name="actividad" placeholder="Ej. Revisión de cámaras de seguridad">
        </div>
        <div class="form-group">
            <label for="responsable">Responsable:</label>
            <input type="text" id="responsable" name="responsable" placeholder="Ej. Juan Pérez">
        </div>
        <button type="submit">Guardar Actividad</button>
    </form>

    <hr style="margin: 30px 0; border: 0; border-top: 1px solid #ccc;">

    <h2>Historial de Actividades</h2>
    <?php
    $archivo = "bitacora.txt";
    // Comprobar si el archivo existe y tiene contenido
    if (file_exists($archivo) && filesize($archivo) > 0) {
        // Leer todo su contenido de forma segura
        $contenido = file_get_contents($archivo);
        echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
    } else {
        echo "<p><em>No hay registros disponibles en la bitácora todavía.</em></p>";
    }
    ?>
</div>

</body>
</html>


