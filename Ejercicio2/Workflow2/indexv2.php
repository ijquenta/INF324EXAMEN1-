<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ingreso login</title>



    <link href="./styles/estilos2.css" rel="stylesheet" type="text/css" />
	  <link href="./styles/formulario.css" rel="stylesheet" type="text/css" />
	  <link href="./styles/resets.css" rel="stylesheet" type="text/css" />
 	  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700,800&display=swap" rel="stylesheet">


</head>
<body>

  <main>
		<h1>Login</h1>
		<form action="controlindex.php" method="GET">
			<div class='field'>
				<label>Usuario</label>
				<input name='usuario' type='text' placeholder='ingrese su usuario' />
			</div>

			<div class='field'>
				<label>Contraseña</label>
				<input name='contrasenia' type='password' placeholder="ingrese su contraseña"/>
			</div>


			<div class='submit'>
				<button>
					Ingresar
				</button>
			</div>

		</form>
	</main>

</body>
</html>
