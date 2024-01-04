<?php
include("db.php");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener fotos de la base de datos
$sql = "SELECT nombre, categoria FROM libro WHERE SUBSTRING_INDEX(nombre, '.', -1) = 'jpg'";
$result = $conexion->query($sql);
?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Categoría</th>
    </tr>
    <?php
    // Mostrar fotos en forma de tabla
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['categoria'] . '</td>';
        echo '</tr>';
    }
    ?>
</table>

<?php
// Cerrar la conexión
$conexion->close();
?>
