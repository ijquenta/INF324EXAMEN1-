<html>
	<head>
		<title>INF324</title>
		<link rel="stylesheet" href="Estilos/estilo_login.css">
	</head>
<body>
	<?php
	include "conexion.inc.php"; // incluir la conexion a la BD.
	// variables de entrada flujo y proceso
	$flujo=$_GET["flujo"]; // flujo obtenido mediante el link
	$proceso=$_GET["proceso"]; // proceso obtenido mediante el link
	// sentencia sql para obtener los flujos.
	$sql="select *
	      from flujoproceso
		  where flujo='".$flujo."'
		  and proceso='".$proceso."'";

	$resultado=mysqli_query($conn, $sql); // obtener las tuplas en resultado
	//print_r($resultado); corrida--> mysqli_result Object ( [current_field] => 0 [field_count] => 6 [lengths] => [num_rows] => 1 [type] => 0 )
	$fila=mysqli_fetch_array($resultado); // convertir las tuplas para desplegar
	//print_r($fila);
    $pantalla = $fila['pantalla'];
	
	include './'.$fila['pantalla'].'/'.$pantalla.'.cabecera.inc.php';


	?>

	<form action="motorflujo.php" action="GET">

		<?php include './'.$pantalla.'/'.$pantalla.'.inc.php';?>
		<br>
		<input type="hidden" value="<?php echo $pantalla?>" name="formulario">
		<input type="hidden" value="<?php echo $flujo?>" name="flujo">
		<input type="hidden" value="<?php echo $proceso?>" name="proceso">

		<input type="submit" value="Anterior" name="Anterior" onclick="this.disabled=true;"/> <!-- boton anterior -->
		<input type="submit" value="Siguiente" name="Siguiente"/> <!-- boton siguiente -->
	</form>
</body>
</html>

