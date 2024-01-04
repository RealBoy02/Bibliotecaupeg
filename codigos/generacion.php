<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generación</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="../bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="generacion.css">
    <link rel="icon" href="../Imagenes/Iconos/HeadBiblio.png" type="image/x-icon">

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
        <h2 class="mb-0" style="font-family: Impact; font-size: 3.5rem;">Generación</h2>
            <p class="mb-0 small">Universidad Politécnica del Estado de Guerrero</p>
        </div>
    </section>

    <section class="contenido">
        <div class="contenedor-cards" >
            <div class="row">
                <div class="card">
                    <img src="../Imagenes/Portadas/FAlternaReno.jpeg" class="card-img-top" alt="..." >
                    <div class="card-border">
                        <div class="card-body">
                            <h5 class="card-title">Fuentes alternativas y renovables</h5>
                            <a href="fuentesalternativasyrenovables.php" class="btn custom-button">Ver libros</a>
                    </div>
                    </div>
                </div>
                <div class="card" >
                    <img src="../Imagenes/Portadas/Fconvencional.jpeg" class="card-img-top" alt="...">
                    <div class="card-border">
                        <div class="card-body">
                            <h5 class="card-title">Fuentes convencionales</h5>
                            <a href="FuentesConvencionales.php" class="btn custom-button">Ver libros</a>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <img src="../Imagenes/Portadas/SisHibridos.jpeg" class="card-img-top" alt="...">
                    <div class="card-border">
                        <div class="card-body">
                            <h5 class="card-title">Sistemas híbridos</h5>
                            <a href="SistemasHibridos.php" class="btn custom-button">Ver libros</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
.card {
    width: 18rem;
    margin: 0% 2% 0% 2%;
    height: 100%; /* Establecer la altura al 100% para ocupar todo el contenedor */
    border: none;
}

.card-img-top {
    object-fit: cover; /* Hace que la imagen cubra todo el contenedor manteniendo su relación de aspecto */
    height: 100%; /* Establecer la altura al 100% para ocupar todo el contenedor */
}

.contenido {
    margin-top: 1.5%;
}

.row {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 2%;
    margin-left: 1.2%;
    margin-right: 1.2%;
    }


    </style>
    
</body>   
</html>