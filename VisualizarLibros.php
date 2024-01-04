<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="VisualizarLibros.css">
    <script src="sweetalert.min.js"></script>
    <title>Registro</title>
</head>

<body>

<section class="encabezado">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #f5f5f5;" >
        <div class="container-fluid">
          <a class="navbar-brand"> <img src="Imagenes\Iconos\LOGOUpeg.png" alt="Logo" class="logo" height="40"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a href="validadExit.php" target="" class="action-button">
                        <img src="Imagenes\Iconos\salida.png" alt="Usuario" width="50" height="45">
                    </a>
                </li>
            </ul>
            <a href="registro.php" target="" class="action-button">
                <img src="Imagenes\Iconos\anadir.png" alt="Usuario" width="50" height="45" style="padding-left: 5%;">
             </a>
          </div>
        </div>
    </nav>
</section>
    
<?php
include("db.php");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener la categoría seleccionada 
$categoriaSeleccionada = isset($_POST['categoria']) ? $_POST['categoria'] : '';

// Consultar los archivos en la base de datos
if (!empty($categoriaSeleccionada)) {
    $sql = "SELECT id, nombre, categoria, ruta FROM libro WHERE categoria = '$categoriaSeleccionada'";
} else {
    $sql = "SELECT id, nombre, categoria, ruta FROM libro";
}

$resultado = $conexion->query($sql);
?>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        * {
            text-align: center;
            box-sizing: border-box;
            text-align: center;
        }

        td img {
            cursor: pointer; /* Cambia el cursor al pasar sobre la imagen */
        }
    </style>


    <h2 style="margin-top: 2%;">Archivos Almacenados </h2>

    <!-- Formulario de filtro por categoría -->
    <form method="post" action="">
        <label for="categoria">Buscar por categoría:</label>
        <select name="categoria" id="categoria">
            <option value="">Todas las categorías</option>
            <?php
            // Obtener todas las categorías disponibles
            $categorias = $conexion->query("SELECT DISTINCT categoria FROM libro");
            while ($filaCategoria = $categorias->fetch_assoc()) {
                $categoriaActual = $filaCategoria['categoria'];
                echo "<option value='$categoriaActual'";
                // Seleccionar la categoría actual si está filtrada
                if ($categoriaSeleccionada == $categoriaActual) {
                    echo " selected";
                }
                echo ">$categoriaActual</option>";
            }
            ?>
        </select>
        <input type="submit" value="Mostrar">
    </form>

    <table class="tabla">
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>

        <?php
        // Mostrar los resultados en la tabla
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['categoria'] . "</td>";
            echo "<td> 
                <a href='#' onclick='confirmarBorrado(" . $fila['id'] . ")'>
                    <img src='Imagenes\Iconos\borrar.png' alt='Borrar' width='20' height='20'>
                </a>
                </td>";
            echo "</tr>";
        }
        ?>

    </table>

<?php
// Cerrar la conexión después de usar los resultados
$conexion->close();
?>
<script src="sweetalert.min.js"></script>
<script>
function confirmarBorrado(id) {
    swal({
        title: "¿Está seguro?",
        text: "Una vez borrado, no se puede recuperar",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location.href = 'borrar.php?id=' + id;
        } else {
            swal("La eliminación fue cancelada");
        }
    });
}
</script>

</body>
</html>
