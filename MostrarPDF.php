<?php
function obtenerArchivosPorExtension($extension) {
    include("db.php");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    $sql = "SELECT nombre, categoria FROM libro WHERE SUBSTRING_INDEX(nombre, '.', -1) = '$extension'";
    $result = $conexion->query($sql);

    $archivos = array();
    while ($row = $result->fetch_assoc()) {
        $archivos[] = $row;
    }

    $conexion->close();

    return $archivos;
}

// Obtener PDFs
$pdfs = obtenerArchivosPorExtension('pdf');
?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Categoría</th>
    </tr>
    <?php
    // Mostrar PDFs en forma de tabla
    foreach ($pdfs as $pdf) {
        echo '<tr>';
        echo '<td>' . $pdf['nombre'] . '</td>';
        echo '<td>' . $pdf['categoria'] . '</td>';
        echo '</tr>';
    }
    ?>
</table>
