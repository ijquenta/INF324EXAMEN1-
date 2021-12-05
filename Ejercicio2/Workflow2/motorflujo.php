	<?php

include "conexion.inc.php";
	$flujo=$_GET["flujo"];
	$proceso=$_GET["proceso"];
	$aux=$_GET["proceso"];
	$formulario=$_GET["formulario"];
	//include $formulario.".motor.inc.php";
	include './'.$formulario.'/'.$formulario.'.motor.inc.php';
	
	if (($proceso == 'P4') or ($proceso == 'P5')) {

		$sql="select *
				 from flujoproceso
				 where flujo='".$flujo."'
				 and proceso='".$proceso."'";

		$resultado2=mysqli_query($conn, $sql); // obtener las tuplas en resultado
		$fila2=mysqli_fetch_array($resultado2); // convertir las tuplas para desplegar
		$procesosiguiente = $fila2["codprocesosiguiente"];
		if($procesosiguiente == null){
			header("Location: fininscripcion.inc.php");
			}
	}
	else{
	if (isset($_GET["Siguiente"]))
	{
		$sql="select * from flujoproceso where flujo='".$flujo."' and proceso='".$proceso."'";
		$resultado=mysqli_query($conn, $sql);
		$fila=mysqli_fetch_array($resultado);
		$procesosiguiente=$fila["codprocesosiguiente"];
		//echo $fila["tipo"];
		if ($procesosiguiente==null && $fila["tipo"]=='C')
		{
			$sql="select * from flujocondicionante where Flujo='".$flujo."' and Proceso='".$proceso."'";
			$resultado2=mysqli_query($conn, $sql);
			$fila2=mysqli_fetch_array($resultado2);
			if ($pregunta=='Si'){ 
				$procesosiguiente=$fila2["Si"];
			}
			else{
				if ($pregunta=='No'){ 
					$procesosiguiente=$fila2["No"];
				}
				else{
					header("Location: desflujo.php?flujo=".$flujo."&proceso=".$fila2['Proceso']);
				} 	
			} 
				
		}
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente);
	}
	else
	{   // procesos anterior
		
		$sql="select * from flujoproceso where flujo='".$flujo."' and codprocesosiguiente='".$proceso."'";
		$resultado=mysqli_query($conn, $sql);
		$fila=mysqli_fetch_array($resultado);
		$proceso=$fila["proceso"];
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$proceso);
	}
	}

		/*include "conexion.inc.php"; // incluir la conexion a la BD.

	$flujo=$_GET["flujo"]; // flujo obtenido mediante el link
	$proceso=$_GET["proceso"]; // proceso obtenido mediante el link

    // recuperamos el formulario
    $formulario = $_GET["formulario"];
    include $formulario.".motor.inc.php";
	if ($proceso == 'P1')
		{
			header("Location: desflujo.php?flujo=".$flujo."&proceso=".$proceso);
		}
	if ($proceso == 'P3')
					{
						$sql="select *
						from flujocondicionante
						where flujo='".$flujo."'
						and proceso='".$proceso."'"; // Ahora el proceso actual es ProcesoSiguiente.

						$resultado=mysqli_query($conn, $sql); // obtener las tuplas en resultado
						$fila=mysqli_fetch_array($resultado); // convertir las tuplas para desplegar
						if (isset($fila["si"])) {
							$proceso = $fila["si"];
						}
						else {
							$proceso = $fila["no"];
						}

						header("Location: desflujo.php?flujo=".$flujo."&proceso=".$proceso);
		}	
	if (($proceso == 'P4') or ($proceso == 'P5')) {

			$sql="select *
					 from flujoproceso
					 where flujo='".$flujo."'
					 and proceso='".$proceso."'";

			$resultado=mysqli_query($conn, $sql); // obtener las tuplas en resultado
			$fila=mysqli_fetch_array($resultado); // convertir las tuplas para desplegar
			$procesosiguiente = $fila["codprocesosiguiente"];
			if(is_null($Procesosiguiente)){
				header("Location: fininscripcion.inc.php");
				}



		}
		if((isset($_GET["Siguiente"])) and ($proceso != 'P3')) // verificamos si existe el SIGUIENTE
	    { // PROCESO SIGUIENTE
	        $sql="select *
	             from flujoproceso
	             where flujo='".$flujo."'
	             and proceso='".$proceso."'";

	        $resultado=mysqli_query($conn, $sql); // obtener las tuplas en resultado
	        $fila=mysqli_fetch_array($resultado); // convertir las tuplas para desplegar
	        $procesosiguiente = $fila["codprocesosiguiente"];
	        // tenemos que direccinar el siguiente a desflujo.php
	        header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente);
	    }
		else{

							// PROCESO ANTERIOR
							$sql="select *
							from flujoproceso
							where flujo='".$flujo."'
							and codprocesosiguiente='".$proceso."'"; // Ahora el proceso actual es ProcesoSiguiente.

							$resultado=mysqli_query($conn, $sql); // obtener las tuplas en resultado
							$fila=mysqli_fetch_array($resultado); // convertir las tuplas para desplegar
							$proceso = $fila["proceso"]; // proceso es nuestro Proceso Anterior.

							header("Location: desflujo.php?flujo=".$flujo."&proceso=".$proceso); // tenemos que direccinar el siguiente a desflujo.php
		}
		
		
*/
    ?>
