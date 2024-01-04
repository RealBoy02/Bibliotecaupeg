<?php
include("db.php");

session_start();


if (!empty($_POST["signup"])){
    if(!empty($_POST["usuario"]) and !empty( $_POST["email"]) and !empty($_POST["pass"])){
        $usuario=$_POST["usuario"];
        $email=$_POST["email"];
        $pass=$_POST["pass"];

        $sql=$conexion->query("select * FROM registro WHERE usuario ='$usuario' and email = '$email' and pass = '$pass'" );
        if($datos = $sql->fetch_object()){
            $_SESSION["id"] = $datos->id;
            $_SESSION["usuario"] = $datos->usuario;
            $_SESSION["email"] = $datos->email;
            $_SESSION["pass"] = $datos->pass;
            header("location: registro.php");
        }else{
            header("location: usuario.php");
        }
    } else{
        header("location: usuario.php");
    }
}
// Cerrar la conexión a la base de datos 
mysqli_close($conexion);

?>
