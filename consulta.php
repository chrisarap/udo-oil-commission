<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="imagenes/udo_logo.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<title>Datos del estudiante</title>
</head>
<body>
	<div>
		<?php
			// llamar a conexion.php
			require ('conexion.php');
			
			//validar usuario
			$fila = mysqli_num_rows($resultado);

			// condicion entrar o salir
			if($fila){
				require('mensajes.php');		
			} else{
				header('Location: index.php');
			}

			// cerrar la conexion a la base de datos
			mysqli_close($conexion);
		?>	
	</div>

	<div class="contenedorr">
		<div class="grupo_pestana">
			<a href="#" class="pestana pestana_activa" onclick="mostrarPestana(0)">Datos del estudiante</a>
			<a href="#" class="pestana" onclick="mostrarPestana(1)">Datos del proyecto</a>
			<a href="#" class="pestana" onclick="mostrarPestana(2)">Correciones</a>
			<a href="#" class="pestana" onclick="mostrarPestana(3)">Jurado</a>
			<a href="#" class="pestana" onclick="mostrarPestana(4)">Aprobación</a>	
		</div>

		<!--datos del estudiante por defecto-->
		<div class="contenido_principal" id="principal">
			<?php
				// llamar a consulta.php
				require('conexion.php');

				// imprimir datos en pantalla
				if($columna = mysqli_fetch_array($resultado)){
					echo '<div class= "caja">';
						echo '<div class= "minicaja">';
							echo '<div class = "izquierda">' . "PIP" . '</div>';
							echo '<div class = "derecha">' . $columna['PIP'] . '</div>';
						echo '</div>';

						echo '<div class= "minicaja">';
							echo '<div class = "izquierda">' . "APELLIDOS" . '</div>';
							echo '<div class = "derecha">' . $columna['APELLIDOS'] . '</div>';
						echo '</div>';

						echo '<div class= "minicaja">';
							echo '<div class = "izquierda">' . "NOMBRES" . '</div>';
							echo '<div class = "derecha">' . $columna['NOMBRES'] . '</div>';
						echo '</div>';

						echo '<div class= "minicaja">';
							echo '<div class = "izquierda">' . "CI" . '</div>';
							echo '<div class = "derecha">' . $columna['CI'] . '</div>';
						echo '</div>';
					echo '</div>';
				}		
				// cerrar conexion a la base de datos
				mysqli_close($conexion);
			?>
		</div>
	</div>

	<!--datos del estudiante-->
	<div class="contenido contenido_activo">
		<?php
			// llamar a consulta.php
			require('conexion.php');

			// imprimir datos en pantalla
			if($columna = mysqli_fetch_array($resultado)){
				echo '<div class= "caja">';
					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "PIP" . '</div>';
						echo '<div class = "derecha">' . $columna['PIP'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "APELLIDOS" . '</div>';
						echo '<div class = "derecha">' . $columna['APELLIDOS'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "NOMBRES" . '</div>';
						echo '<div class = "derecha">' . $columna['NOMBRES'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "CI" . '</div>';
						echo '<div class = "derecha">' . $columna['CI'] . '</div>';
					echo '</div>';
				echo '</div>';
			}		
			// cerrar conexion a la base de datos
			mysqli_close($conexion);
		?>
	</div>

	<!--datos del proyecto-->
	<div class="contenido">
		<?php
			// llamar a consulta.php
			require('conexion.php');

			// imprimir datos en pantalla
			if($columna = mysqli_fetch_array($resultado)){
				echo '<div class= "caja">';
					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "FECHA DE ENTREGA" . '</div>';
						echo '<div class = "derecha">' . $columna['FECHA DE ENTREGA'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "ASESOR" . '</div>';
						echo '<div class = "derecha">' . $columna['ASESOR ACADEMICO'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "TUTOR" . '</div>';
						echo '<div class = "derecha">' . $columna['ASESOR INDUSTRIAL'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "AREA" . '</div>';
						echo '<div class = "derecha">' . $columna['AREA DE TRABAJO'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "MODALIDAD" . '</div>';
						echo '<div class = "derecha">' . $columna['MODALIDAD'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "EMPRESA" . '</div>';
						echo '<div class = "derecha">' . $columna['EMPRESA'] . '</div>';
					echo '</div>';


				echo '</div>';
			}		
			// cerrar conexion a la base de datos
			mysqli_close($conexion);
		?>
	</div>

	<!--corecciones-->
	<div class="contenido">
		<?php
			// llamar a consulta.php
			require('conexion.php');

			// imprimir datos en pantalla
			if($columna = mysqli_fetch_array($resultado)){
				echo '<div class= "caja">';
					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "PRIMERA CORRECCION" . '</div>';
						echo '<div class = "derecha">' . $columna['PRIMERA CORRECCION'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "ENTREGA A DOCENTE 1" . '</div>';
						echo '<div class = "derecha">' . $columna['ENTREGA A DOCENTE 1'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "RECIBIDA DEL DOCENTE 1" . '</div>';
						echo '<div class = "derecha">' . $columna['RECIBIDA DEL DOCENTE 1'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "SEGUNDA CORRECCION" . '</div>';
						echo '<div class = "derecha">' . $columna['SEGUNDA CORRECCION'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "ENTREGA A DOCENTE 2" . '</div>';
						echo '<div class = "derecha">' . $columna['ENTREGA A DOCENTE 1'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "RECIBIDA DEL DOCENTE 2" . '</div>';
						echo '<div class = "derecha">' . $columna['RECIBIDA DEL DOCENTE 1'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "CORRECCION ENTREGADA AL ESTUDIANTE" . '</div>';
						echo '<div class = "derecha">' . $columna['CORRECCION ENTREGADA AL ESTUDIANTE'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "CORRECCION RECIBIDA DEL ESTUDIANTE" . '</div>';
						echo '<div class = "derecha">' . $columna['CORRECCION RECIBIDA DEL ESTUDIANTE'] . '</div>';
					echo '</div>';					

				echo '</div>';
			}		
			// cerrar conexion a la base de datos
			mysqli_close($conexion);
		?>
	</div>

	<!--jurado-->
	<div class="contenido">
		<?php
			// llamar a consulta.php
			require('conexion.php');

			// imprimir datos en pantalla
			if($columna = mysqli_fetch_array($resultado)){
				echo '<div class= "caja">';
					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "JURADO PRINCIPAL 1" . '</div>';
						echo '<div class = "derecha">' . $columna['JURADO PRINCIPAL 1'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "JURADO PRINCIPAL 2" . '</div>';
						echo '<div class = "derecha">' . $columna['JURADO PRINCIPAL 2'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "JURADO SUPLENTE 1" . '</div>';
						echo '<div class = "derecha">' . $columna['JURADO SUPLENTE 1'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "JURADO SUPLENTE 2" . '</div>';
						echo '<div class = "derecha">' . $columna['JURADO SUPLENTE 2'] . '</div>';
					echo '</div>';

				echo '</div>';
			}		
			// cerrar conexion a la base de datos
			mysqli_close($conexion);
		?>
	</div>

	<!--aprobacion-->
	<div class="contenido">
		<?php
			// llamar a consulta.php
			require('conexion.php');

			// imprimir datos en pantalla
			if($columna = mysqli_fetch_array($resultado)){
				echo '<div class= "caja">';
					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "APROBADO CTG" . '</div>';
						echo '<div class = "derecha">' . $columna['APROBADO CTG'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "ENVIADO A COMISION CENTRAL" . '</div>';
						echo '<div class = "derecha">' . $columna['ENVIADO A COMISION CENTRAL'] . '</div>';
					echo '</div>';

					echo '<div class= "minicaja">';
						echo '<div class = "izquierda">' . "RECIBIDO DE COMISION CENTRAL" . '</div>';
						echo '<div class = "derecha">' . $columna['RECIBIDO DE COMISION CENTRAL'] . '</div>';
					echo '</div>';
				echo '</div>';
			}		
			// cerrar conexion a la base de datos
			mysqli_close($conexion);
		?>
	</div>

	<script src="script.js"></script>
</body>
</html>