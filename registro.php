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
    <link rel="stylesheet" href="registro.css">
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
            <div class="nombreUser" style= "font-size: 1.5rem; margin-right: 10%;">
                <?php
                    echo "Bienvenido " . $_SESSION["usuario"]
                ?> 
            </div>
            <a href="VisualizarLibros.php" target="" class="action-button">
                <img src="Imagenes\Iconos\Estante.png" alt="Usuario" width="50" height="45" style="padding-left: 5%;">
             </a>
          </div>
        </div>
    </nav>
</section>

    <section class="Registro">
        <div class="container">
            <div class="form-container">
                <img src="Imagenes/Iconos/libros.png" alt="usuario" srcset="" width="100" height="100">
                <form action="procesar_archivo.php" method="post" enctype="multipart/form-data"
                    onsubmit="return validarFormulario();">
                    <label for="categoria">Categoría:</label>
                    <select name="categoria" id="categoria">
                        <option value="" disabled selected>Selecciona una categoría</option>
                        <option value="Administracion">Administración</option>
                        <option value="Aduanas">Aduanas</option>
                        <option value="Almacenamiento">Almacenamiento</option>
                        <option value="Comercio">Comercio</option>
                        <option value="Derecho">Derecho</option>
                        <option value="Economia">Economía</option>
                        <option value="Eficiencia Energetica">Eficiencia Energetica</option>
                        <option value="Electronica">Electrónica</option>
                        <option value="Fuentes alternativas y renovables">Fuentes alternativas y renovables</option>
                        <option value="Fuentes convencionales">Fuentes convencionales</option>
                        <option value="Finanzas">Finanzas</option>
                        <option value="Legislacion Ambiental">Legislación Ambiental</option>
                        <option value="Logistica">Logística</option>
                        <option value="Matematicas">Matemáticas</option>
                        <option value="Proceso de Ingenieria">Proceso de Ingeniería</option>
                        <option value="Programacion">Programación</option>
                        <option value="Quimica y Biologia Ambiental">Química y Biología Ambiental </option>
                        <option value="Redes">Redes</option>
                        <option value="Sistemas hibridos">Sistemas híbridos</option>
                        <option value="Tecnologias Tratamiento">Tecnologías de Tratamiento </option>
                        <option value="Telecomunicaciones">Telecomunicaciones</option>
                        <option value="Transversales">Tranversales</option>
                        <option value="Explora Mas">Explora Más...</option>
                    </select>
                    <label for="archivo_pdf">PDF:</label>
                    <input type="file" name="archivo_pdf" id="archivo_pdf" accept=".pdf">
                    <label for="archivo_foto">Foto:</label>
                    <input type="file" name="archivo_foto" id="archivo_foto" accept=".jpg, .jpeg, .png">
                    <button type="submit" name="submit">Subir Archivos</button>
                </form>

                <script>
                    function validarFormulario() {
                        var categoria = document.getElementById('categoria').value;
                        var archivo_pdf = document.getElementById('archivo_pdf').value;
                        var archivo_foto = document.getElementById('archivo_foto').value;

                        if (categoria === '' || archivo_pdf === '' || archivo_foto === '') {
                            // Mostrar error si algún campo está vacío
                            swal({
                                title: "Error",
                                text: "Por favor, completa todos los campos",
                                icon: "error",
                                button: "Aceptar",
                            });
                            return false; 
                        }

                        // Campos están completos
                            swal({
                            title: "Éxito",
                             text: "Archivos enviados correctamente",
                            icon: "success",
                        });
                            setTimeout(function () {
                            window.location.href = "registro.php";
                            }, 8000); 
                    }
                </script>
            </div>
        </div>
    </section>

</body>

</html>
