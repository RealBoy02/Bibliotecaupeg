<?php
include("db.php");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$categoria = $_POST['categoria'];

// Procesar el archivo PDF
$archivo_pdf_nombre = $_FILES['archivo_pdf']['name'];
$archivo_pdf_temporal = $_FILES['archivo_pdf']['tmp_name'];
$carpeta_destino = "archivos/" . $categoria . "/";

if (!file_exists($carpeta_destino)) {
    mkdir($carpeta_destino, 0777, true);
}

move_uploaded_file($archivo_pdf_temporal, $carpeta_destino . $archivo_pdf_nombre);

// Procesar la foto
$archivo_foto_nombre = $_FILES['archivo_foto']['name'];
$archivo_foto_temporal = $_FILES['archivo_foto']['tmp_name'];

move_uploaded_file($archivo_foto_temporal, $carpeta_destino . $archivo_foto_nombre);

// Insertar información en la base de datos
$sql_pdf = "INSERT INTO libro (nombre, categoria, carpeta, ruta) VALUES ('$archivo_pdf_nombre', '$categoria', '$carpeta_destino', '$carpeta_destino$archivo_pdf_nombre')";
$conexion->query($sql_pdf);

$sql_foto = "INSERT INTO libro (nombre, categoria, carpeta, ruta) VALUES ('$archivo_foto_nombre', '$categoria', '$carpeta_destino', '$carpeta_destino$archivo_foto_nombre')";
$conexion->query($sql_foto);

// Cerrar la conexión
$conexion->close();

// Redirigir 
header("Location: registro.php");
exit();
?>