<?php 
    include "conexion.inc.php";
    //recuperamos las variables GET usuario y contraseña.
    $usuario = $_GET["usuario"];
    $contrasenia = $_GET["contrasenia"];
    //consulta para recuperar a los usuarios
    $sql="select * from usuarios where usuario='".$usuario;
    $sql.="' and contraseña='".$contrasenia."'";

    $resultado = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_array($resultado);

    if ($fila["usuario"] == $usuario and $fila["contraseña"] == $contrasenia)
    { 
        // nos sirve la variable de seccion para todo el proceso OJO
        session_start();  // creamos la variable de seccion para utilizarlo en bandeja.php
        $_SESSION["usuario"] = $usuario;
        header("Location: bandeja.php");
    }
    else
    {
        header("Location: index.php");
    }

?>