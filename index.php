<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Imagenes/Iconos/HeadBiblio.png" type="image/x-icon">

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
                <a class="nav-link active" aria-current="page" href="index.php" style="color: black;">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                  Categorias
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="codigos/administracion.php">Administración</a></li>
                    <li><a class="dropdown-item" href="codigos/aduanas.php">Aduanas</a></li>
                    <li><a class="dropdown-item" href="codigos/comercio.php">Comercio</a></li>
                    <li><a class="dropdown-item" href="codigos/derecho.php">Derecho</a></li>
                    <li><a class="dropdown-item" href="codigos/electronica.php">Electrónica</a></li>
                    <li><a class="dropdown-item" href="codigos/programacion.php">Programación</a></li>
                    <li><a class="dropdown-item" href="codigos/redes.php">Redes</a></li>
                    <li><a class="dropdown-item" href="codigos/telecomunicaciones.php">Telecomunicaciones</a></li>
                    <li><a class="dropdown-item" href="codigos/generacion.php">Generación</a></li>
                    <li><a class="dropdown-item" href="codigos/almacenamiento.php">Almacenamiento</a></li>
                    <li><a class="dropdown-item" href="codigos/EficienciaEnergetica.php">Eficiencia Energética</a></li>
                    <li><a class="dropdown-item" href="codigos/lesgilacionAmbiental.php">Legislación Ambiental</a></li>
                    <li><a class="dropdown-item" href="codigos/procesosIngenieriaAmbiental.php">Proceso de Ingeniería</a></li>
                    <li><a class="dropdown-item" href="codigos/quimicabiologiamambiental.php">Química y Biología Ambiental</a></li>
                    <li><a class="dropdown-item" href="codigos/tecnologiasTratamiento.php">Tecnologías de Tratamiento</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="index.php">Todas las Categorías</a></li>
                </ul>
              </li>
            </ul>
            <a class="navbar-brand ml-auto" href="usuario.php">
                <img src="Imagenes\Iconos\usuario.png" alt="Usuario" width="30" height="28">
            </a>
          </div>
        </div>
    </nav>
</section>

    <section class="namePage">
        <div class="contenedor-namePage">
            <h1 class="mb-0">Biblioteca Digital</h1>
            <p class="mb-0 small">Universidad Politécnica del Estado de Guerrero</p>
        </div>
    </section>

    <section class="categorias">
        <div class="contendor-categorias">
            <h2 class="title-categorias">Categorias</h2>
        </div>
    </section>

    <section class="contenido">
        <div class="contenedor-cards">
            <div class="row">
                <div class="col-6 col-sm-3 col-lg-2 mb-2" >
                    <div class="contenedor custom-card"  >
                        <div class="card">
                            <img src="Imagenes/Portadas/Administracion.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Administración</h5>
                                <a href="codigos/administracion.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card" >
                        <div class="card">
                            <img src="Imagenes/Portadas/Aduanas.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Aduanas</h5>
                                <a href="codigos/aduanas.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Almacenamiento.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Almacenamiento</h5>
                                <a href="codigos/almacenamiento.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card" >
                        <div class="card">
                            <img src="Imagenes/Portadas/Comercio.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Comercio</h5>
                                <a href="codigos/comercio.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card" >
                        <div class="card">
                            <img src="Imagenes/Portadas/Derecho.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Derecho</h5>
                                <a href="codigos/derecho.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Economia.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Economía</h5>
                                <a href="codigos/economia.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/EfiEner.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Eficiencia Energética</h5>
                                <a href="codigos/EficienciaEnergetica.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Electronica.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Electrónica</h5>
                                <a href="codigos/electronica.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Finanzas.jpg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Finanzas</h5>
                                <a href="codigos/finanzas.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/GeneracionEnergia.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Generación</h5>
                                <a href="codigos/generacion.php" class="btn custom-button">Abrir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/LegislacionAmbiental.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Legislación Ambiental</h5>
                                <a href="codigos/lesgislacionAmbiental.php" class="btn custom-button ">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Logistica.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Logística</h5>
                                <a href="codigos/logistica.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Matematicas.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Matemáticas</h5>
                                <a href="codigos/matematicas.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/ProcesoIngenieria.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Procesos de Ingeniería</h5>
                                <a href="codigos/procesosIngenieriaAmbiental.php" class="btn custom-button ">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Programación.jpg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Programación</h5>
                                <a href="codigos/programacion.php" class="btn custom-button ">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/QuimicaBiologia.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Química y Biología Ambiental</h5>
                                <a href="codigos/quimicabiologiamambiental.php" class="btn custom-button ">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Redes.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Redes</h5>
                                <a href="codigos/redes.php" class="btn custom-button ">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/TecnologiasTratamiento.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Tecnologías de Tratamiento</h5>
                                <a href="codigos/tecnologiasTratamiento.php" class="btn custom-button ">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Telecomunicaciones.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Telecomunicaciones</h5>
                                <a href="codigos/telecomunicaciones.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/Transversales.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Transversales</h5>
                                <a href="codigos/transversales.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 mb-2">
                    <div class="contenedor custom-card">
                        <div class="card">
                            <img src="Imagenes/Portadas/ExploraMas.jpeg" class="card-img-top" alt="" srcset="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Explora Más...</h5>
                                <a href="codigos/exploramas.php" class="btn custom-button">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </section>

    <section class="contenedor bg-body-tertiary">
        <div class="contenedor-footer" style="background-color: #f5f5f5;">
          <p> &copy Copyright 2023 | Desarrollado por: Cortez Aguilar Ismael & Torres Gervacio Yahir</p>
        </div>
    </section>
  

    
</body>   
</html>