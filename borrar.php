<?php
include("db.php");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se ha enviado un ID válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener la información del libro
    $sql = "SELECT * FROM libro WHERE id = $id";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $libro = $resultado->fetch_assoc();

        // Borrar el registro de la base de datos
        $sqlDelete = "DELETE FROM libro WHERE id = $id";
        $conexion->query($sqlDelete);

        // Borrar los archivos de la carpeta
        $rutaArchivoPdf = $libro['ruta'];
        if (file_exists($rutaArchivoPdf)) {
            if (unlink($rutaArchivoPdf)) {
                // Redirigir después de borrar
                header("Location: VisualizarLibros.php");
                exit();
            } else {
                // Error al borrar el archivo
                header("Location: VisualizarLibros.php?error=1");
                exit();
            }
        }
    } else {
        // Libro no encontrado
        header("Location: VisualizarLibros.php?error=2");
        exit();
    }
} else {
    // ID no válido
    header("Location: VisualizarLibros.php?error=3");
    exit();
}

// Cerrar la conexión
$conexion->close();
?>
