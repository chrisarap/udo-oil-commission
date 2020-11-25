<?php	
	function mensajeError(){
		if (isset($_POST['boton'])) {
			// llamar a conexion.php
			require ('conexion.php');
			
			//validar usuario
			$fila = mysqli_num_rows($resultado);

			// condicion entrar o salir
			if($fila){
				return $mensaje = "";

			} else{
				return $mensaje = "PIP o cédula incorrectos";
			}

			// cerrar la conexion a la base de datos
			mysqli_close($conexion);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="imagenes/udo_logo.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<title>Comisión de Trabajos de Grado</title>
</head>

<body>
	<!--menu-->
	<?php require("elementos/menu.php"); ?>

	<!--encabezado-->
	<div class="contendor">
		<div class="caja_imagenes">
			<img class="imagenes" src="imagenes/udo_logo.png">
			<h1>Comisión de Trabajos de Grado</h1>
			<img class="imagenes" src="imagenes/petroleo.png">
		</div>

		<h2>Departamento de Petróleo</h2>

		<!--formulario-->
		<form action="prueba.php" method="post">
			<div class="mini_bloque">
				<input type="number" name="cedula" placeholder="Número de cédula" pattern="[0-9]{7,8}" required autofocus>
			</div>
			<div class="mini_bloque">
				<input type="number" name="pip" placeholder="Número PIP" pattern="[0-9]{5}" required>
			</div>
			<input type="submit" name="boton" value="Enviar">
		</form>

		<h2 style="color:red;"><?php echo mensajeError(); ?></h2>
		
		<h2>AVISO: La comisión atenderá los dias Viernes de 8 a 10 am en el departamento...</h2>
		<h2>Última actualización: 20 de Junio 2019, 09:20 pm</h2>
		<h2>VIERNES 21 DE JUNIO 2019, ES EL ULTIMO DIA DE ATENCION ESTE SEMESTRE</h2>
	</div>
</body>
</html>