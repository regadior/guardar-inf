<?php
require_once('../../database/conn.php');
$db=conexion();
// COMPROBAMOS SI SE MANDO EL FORMULARIO 
if (isset($_POST['register'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $rol=2;

    if ($pass1!==$pass2) {
        echo"NO COINCIDEN LAS CONTRASEÑAS";
    }
// CONSULTA PARA VER SI EXISTE YA UN USUARIO Y UN GMAIL
    $consulta=mysqli_query($db, "select * from usuario WHERE gmail= '$email'or nombre= '$username'");

    if (mysqli_num_rows($consulta)>0) {
        echo "Este usuario ya existe";

    }
    if (mysqli_num_rows($consulta) == 0) {
        $consulta = mysqli_query($db, "INSERT INTO usuario(nombre,contrasena,gmail,rol) VALUES ('$username', '$pass1', '$email', '$rol')");

        if ($consulta) {
            header("Location:");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }

}

?>