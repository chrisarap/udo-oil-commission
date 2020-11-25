<?php
	// llamar conexion.php para conectar la base de datos
	require ('conexion.php');
	mysqli_select_db($conexion, $db_nombre);
?>

<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Editar</title>
</head>

<body>
<form action="#" method="post">

<!--LISTO-->
<div id = "codigo_pip"  class="bloque_principal">
	<!--sin el blo seccion no tengo el espaciado-->
	<div class="bloque_seccion">
		<div class="mini_bloque">
			<label>PIdddP</label>
			<input type="text" name="" placeholder="Número PIP">
		</div>
		<div class="mini_bloque">
			<label>Fecha de entrega</label>
			<input type="date" name="">	
		</div>
	</div>
</div>
<!--LISTO-->

<!--LISTO-->
<div id="datos_estudiantes" class="bloque_principal">	
	<div class="bloque_seccion">
		<div class="mini_bloque">
			<label>Apellidos</label>
			<input type="text" name="" placeholder="Apellidos">
		</div>

		<div class="mini_bloque">
			<label>Nombres</label>
			<input type="text" name="" placeholder="Nombres">
		</div>

		<div class="mini_bloque">
			<label>C. I</label>
			<input type="text" name="" placeholder="Cédula de Identidad">
		</div>
	</div>

	<div class="bloque_seccion">		
		<div class="mini_bloque">
			<label>Apellidos</label>
			<input type="text" name="" placeholder="Apellidos">
		</div>
		<div class="mini_bloque">
			<label>Nombres</label>
			<input type="text" name="" placeholder="Nombres">
		</div>

		<div class="mini_bloque">
			<label>C. I</label>
			<input type="text" name="" placeholder="Cédula de Identidad">
		</div>
	</div>
</div>
<!--LISTO-->

<!--LISTO-->
<div class="bloque_principal">
	<div class="bloque_seccion">	
		<div class="mini_bloque">
			<label>Empresa</label>
			<input type="text" placeholder="Nombre de la empresa">
		</div>

		<div class="mini_bloque">
			<label>Area de trabajo</label>
			<select class="area">
				<option>NULL</option>
				<?php
					$consulta = $conexion->query("SELECT * FROM area");
					while($valores = mysqli_fetch_array($consulta)){
						echo '<option value="'.$valores[id].'">'.$valores[area_trabajo].'</option>';
					}
				?>
			</select>
		</div>

		<div class="mini_bloque">
			<label>Modalidad</label>
			<select id="modalidad">
				<?php
					$consulta = $conexion->query("SELECT * FROM modalidad");
					while($valores = mysqli_fetch_array($consulta)){
						echo '<option value="'.$valores[id].'">'.$valores[tipo].'</option>';
					}
				?>			
			</select>
		</div>
	</div>
</div>
<!--LISTO-->

<!--LISTO-->
<div id="correciones" class="bloque_principal">
	<div class="bloque_seccion">
		<div class="mini_bloque">
			<label>Primera correción</label>
			<select class="profesores">
				<option>NULL</option>
				<?php
				$consulta = $conexion->query("SELECT * FROM profesores");
				while($valores = mysqli_fetch_array($consulta)){
				echo '<option value="'.$valores[id].'">'.$valores[nombre_profesor].'</option>';
				}
				?>
			</select>
		</div>

		<div class="mini_bloque">
			<label>Entrega al docente 1</label>
			<input type="date">
		</div>

		<div class="mini_bloque">
			<label>Recibida del docente 1</label>
			<input type="date">
		</div>
	</div>

	<div class="bloque_seccion">
		<div class="mini_bloque">
			<label>Segunda correción</label>
			<select class="profesores">
				<option>NULL</option>
				<?php
					$consulta = $conexion->query("SELECT * FROM profesores");
					while($valores = mysqli_fetch_array($consulta)){
						echo '<option value="'.$valores[id].'">'.$valores[nombre_profesor].'</option>';
					}
				?>
			</select>
		</div>

		<div class="mini_bloque">
			<label>Entrega al docente 2</label>
			<input type="date">
		</div>

		<div class="mini_bloque">
			<label>Recibida del docente 2</label>
			<input type="date">
		</div>		
	</div>
</div>
<!--LISTO-->

<!--LISTO-->
<div class="bloque_principal">
	<div class="bloque_seccion">
		<div class="mini_bloque">
			<label>Corrección entregada al estudiante</label>
			<input type="date">
		</div>

		<div class="mini_bloque">
			<label>Corrección recibida del estudiante</label>
			<input type="date">
		</div>

		<div class="mini_bloque">
			<label>Aprobado CTG</label>
			<input type="date">
		</div>
	</div>
</div>
<!--LISTO-->

<!--LISTO-->
<div id="jurado" class="bloque_principal">

	<div class="bloque_seccion">
		<h2>Asesores</h2>
		<div class="mini_bloque">
			<label>Académico</label>
			<select class="profesores">
				<option>NULL</option>
				<?php
				$consulta = $conexion->query("SELECT * FROM profesores");
				while($valores = mysqli_fetch_array($consulta)){
				echo '<option value="'.$valores[id].'">'.$valores[nombre_profesor].'</option>';
				}
				?>
			</select>
		</div>

		<div class="mini_bloque">
			<label>Industrial</label>
			<input type="text" placeholder="Tutor Industrial">
		</div>		
	</div>




	<div class="bloque_seccion">
		<h2>Jurados principales</h2>
		<div class="mini_bloque">
			<label>1</label>
			<select class="profesores">
				<option>NULL</option>
				<?php
				$consulta = $conexion->query("SELECT * FROM profesores");
				while($valores = mysqli_fetch_array($consulta)){
				echo '<option value="'.$valores[id].'">'.$valores[nombre_profesor].'</option>';
				}
				?> 
			</select>
		</div>	
		
		<div class="mini_bloque">
			<label>2</label>
			<select class="profesores">
				<option>NULL</option>
				<?php
					$consulta = $conexion->query("SELECT * FROM profesores");
					while($valores = mysqli_fetch_array($consulta)){
						echo '<option value="'.$valores[id].'">'.$valores[nombre_profesor].'</option>';
					}
				?>
			</select>
		</div>
	</div>


	<div class="bloque_seccion">
		<h2>Jurados suplentes</h2>
		<div class="mini_bloque">
			<label>1</label>
			<select class="profesores">
				<option>NULL</option>
				<?php
				$consulta = $conexion->query("SELECT * FROM profesores");
				while($valores = mysqli_fetch_array($consulta)){
				echo '<option value="'.$valores[id].'">'.$valores[nombre_profesor].'</option>';
				}
				?>
			</select>
		</div>

		<div class="mini_bloque">
			<label>2</label>
			<select class="profesores">
				<option>NULL</option>
				<?php
					$consulta = $conexion->query("SELECT * FROM profesores");
					while($valores = mysqli_fetch_array($consulta)){
						echo '<option value="'.$valores[id].'">'.$valores[nombre_profesor].'</option>';
					}
				?>
			</select>
		</div>	
	</div>
</div>
<!--LISTO-->

<!--LISTO-->
<div class="bloque_principal">
	<div class="bloque_seccion">
		<div class="mini_bloque">
			<label>Enviado a comisión central</label>
			<input type="date">
		</div>

		<div class="mini_bloque">
			<label>Recibido de comisión central</label>
			<input type="date">
		</div>

		<div class="mini_bloque">
			<label>Fecha de presentación</label>
			<input type="date">
		</div>
	</div>
</div>
<!--LISTO-->

<!--LISTO-->
<div class="bloque_principal">
	<div class="mini_bloque">
		<label>Observaciones</label>
		<textarea placeholder="Comentarios..."></textarea>
	</div>
</div>
<!--LISTO-->

<div>
<input type="submit" value="Guardar">
</div>
</form>
</body>