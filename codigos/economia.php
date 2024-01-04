<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economía</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="../bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<section class="encabezado">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #f5f5f5;" >
        <div class="container-fluid">
          <a class="navbar-brand"> <img src="../Imagenes\Iconos\LOGOUpeg.png" alt="Logo" class="logo" height="40"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php" style="color: black;">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                  Categorias
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="administracion.php">Administración</a></li>
                    <li><a class="dropdown-item" href="aduanas.php">Aduanas</a></li>
                    <li><a class="dropdown-item" href="comercio.php">Comercio</a></li>
                    <li><a class="dropdown-item" href="derecho.php">Derecho</a></li>
                    <li><a class="dropdown-item" href="electronica.php">Electrónica</a></li>
                    <li><a class="dropdown-item" href="programacion.php">Programación</a></li>
                    <li><a class="dropdown-item" href="redes.php">Redes</a></li>
                    <li><a class="dropdown-item" href="telecomunicaciones.php">Telecomunicaciones</a></li>
                    <li><a class="dropdown-item" href="generacion.php">Generación</a></li>
                    <li><a class="dropdown-item" href="almacenamiento.php">Almacenamiento</a></li>
                    <li><a class="dropdown-item" href="EficienciaEnergetica.php">Eficiencia Energética</a></li>
                    <li><a class="dropdown-item" href="lesgislacionAmbiental.php">Legislación Ambiental</a></li>
                    <li><a class="dropdown-item" href="procesosIngenieriaAmbiental.php">Proceso de Ingeniería</a></li>
                    <li><a class="dropdown-item" href="quimicabiologiamambiental.php">Química y Biología Ambiental</a></li>
                    <li><a class="dropdown-item" href="tecnologiasTratamiento.php">Tecnologías de Tratamiento</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../index.php">Todas las Categorías</a></li>
                </ul>
              </li>
            </ul>
            <a class="navbar-brand ml-auto" href="../usuario.php">
                <img src="../Imagenes\Iconos\usuario.png" alt="Usuario" width="30" height="28">
            </a>
          </div>
        </div>
    </nav>
</section>

    <section class="namePage">
        <div class="contenedor-namePage">
        <h2 class="mb-0" style="font-family: Impact; font-size: 3.5rem;">Economía</h2>
            <p class="mb-0 small">Universidad Politécnica del Estado de Guerrero</p>
        </div>
    </section>


    <!--esta es la parte del algoritmo que muestra los libros que se tienen en la base de datos de manera 
    automatica y se colocan en el lugar que deben estar-->
    <?php 
    include "../db.php";
    $cons="SELECT * FROM libro";
    $result=mysqli_query($conexion,$cons);
    ?>

<section id="libros">
    <div class="row">
        <?php
        $carpeta = '../archivos/Economia';
        $archivos = scandir($carpeta);

        $extensiones_permitidas = array('pdf');
        $archivos_permitidos = array();

        foreach ($archivos as $archivo) {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), $extensiones_permitidas)) {
                $archivos_permitidos[] = $archivo;
            }
        }

foreach ($archivos_permitidos as $archivo) {
    $ruta_completa_pdf = $carpeta . '/' . $archivo;
    $nombre_sin_extension = pathinfo($archivo, PATHINFO_FILENAME);
    $ruta_completa_imagen_jpg = $carpeta . '/' . $nombre_sin_extension . '.jpg';
    $ruta_completa_imagen_png = $carpeta . '/' . $nombre_sin_extension . '.png';
    $ruta_completa_imagen_jpeg = $carpeta . '/' . $nombre_sin_extension . '.jpeg';

    echo '<div class="col-6 col-sm-3 col-lg-2 mb-2">';
    echo '<div class="contenedor custom-card" style="width: 12.8rem; height: 24rem; margin-top: 6%;">';
    echo '<div class="card">';
    
    // Verificar si existe la imagen 
    if (file_exists($ruta_completa_imagen_jpg)) {
        echo '<img src="' . $ruta_completa_imagen_jpg . '" class="card-img-top" alt="" srcset="" style="width: 100%; height: 78%;">';
    } elseif (file_exists($ruta_completa_imagen_png)) {
        echo '<img src="' . $ruta_completa_imagen_png . '" class="card-img-top" alt="" srcset="" style="width: 100%; height: 78%;">';
    } elseif (file_exists($ruta_completa_imagen_jpeg)) {
        echo '<img src="' . $ruta_completa_imagen_jpeg . '" class="card-img-top" alt="" srcset="" style="width: 100%; height: 78%;">';
    }else {
        // Si no hay ninguna imagen
        echo '<div class="card-img-top no-image-icon">Sin Portada</div>';
    }
    
    echo '<div class="card-body text-center">';
    echo '<h5 class="card-title" style="margin: 0;">' . $nombre_sin_extension . '</h5>';
    echo '<a href="' . $ruta_completa_pdf . '" class="btn custom-button" style="display: block; margin-top: 5px;">Descargar</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
        ?>
    </div>
</section>
</body>
</html>