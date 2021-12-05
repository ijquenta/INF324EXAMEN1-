<?php
    session_start(); // para recuperar las variables de seccion de controindex.php
    include "conexion.inc.php";
    //consulta para recuperar todos los seguimientos que no son null
    $sql="select * from seguimiento where usuario='".$_SESSION["usuario"]."' ";
    $sql.="and fechaFin is null";

    $resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandeja</title>
    <link rel="stylesheet" href="Estilos/estilo_usuario.css" type="text/css">
</head>
  <body>


      <div id="bloque">
                <table>
                    <div>
                        <thead>
                        <tr>
                          <td>Usuario</td>
                          <td>Flujo</td>
                          <td>Proceso</td>
                          <td>Fecha Inicio</td>
                          <td>Acción</td>
                        </tr>
                        </thead>
                    </div>
                    <?php
            while($fila = mysqli_fetch_array($resultado)){
                  echo "<tr>";
                  echo "<th>".$fila['usuario']."</th>";
                  echo "<th>".$fila['flujo']."</th>";
                  echo "<th>".$fila['proceso']."</th>";
                  echo "<th>".$fila['fechaini']."</th>";
                  echo "<th> <a ";
                  echo "href='desflujo.php?flujo=$fila[flujo]&proceso=$fila[proceso]'";
                  echo "> <img src='Estilos/mostrarv2.png' alt='user' width='150px; height='70px'></a></th><br> ";
                  echo "</tr>";
            }
            ?>
                </table>
            </div>


  </body>
</html>
