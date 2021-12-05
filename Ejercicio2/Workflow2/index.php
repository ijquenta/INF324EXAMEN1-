<!DOCTYPE html>
<html lang="en">

<head>

    <title>INF324</title>
    <link rel="stylesheet" href="Estilos/estilo_login.css"> <!-- insertamos la hoja de estilo para el login -->


</head>
<body>

  <form action="controlindex.php" method="GET"> <!-- al ingresar nos mandara al archivo validar.php para la verificacion del usuario -->
        <h1>Carrera de Informática</h1>
        <h2>Convocatoria centros de estudiantes</h2>
        <img src="Estilos/icono_login.png" alt="user" width="150px" height="150px">
        <p>Usuario:</p>
        <input type="text" placeholder="ingrese su usuario" name="usuario"> <br>
        <p>Contraseña:</p>
        <input type="password" placeholder="ingrese su contraseña" name="contrasenia"> <br>
        <input type="submit" value="Ingresar">
    </form>

</body>
</html>
