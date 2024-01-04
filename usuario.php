<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesión</title>
    <link rel="icon" href="Imagenes/Iconos/usuario.png" type="image/x-icon">
    <link rel="stylesheet" href="usuario.css">
</head>
<body>
    <div class="fondo-desenfocado"></div>
        <div class="contenido-superpuesto">
            <div class="main">
                <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <h2 class="form-title">Administración de archivos</h2>
                                <form method="POST" class="register-form" id="register-form" action="validar.php">
                                    <div class="form-group">
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"><img src="Imagenes/Iconos/user.png" alt="" width="16" height="10"></i></label>
                                        <input type="text" name="usuario" id="name" placeholder="Ingresa tu Usuario"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email"><img src="Imagenes/Iconos/gmail.png" alt="" width="16" height="10"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Ingresa tu correo"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass"><i class="zmdi zmdi-lock"><img src="Imagenes/Iconos/contrasena.png" alt="" width="16" height="10"></i></label>
                                        <input type="password" name="pass" id="pass" placeholder="Ingresa tu contraseña"/>
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit" value="Ingresar"/>
                                    </div>
                                </form>
                            </div>
                            <div class="signup-image">
                                <figure><img src="Imagenes/Iconos/grupo.png" alt="sing up image"></figure>
                                <p class="informativo"> ⚠️ Solo personal autorizado</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>