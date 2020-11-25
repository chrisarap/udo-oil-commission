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
	<nav>
		<ul class="menu">
			<a class="menu_link" href="index.php"><li class="menu_list">Principal</li></a>
			<a class="menu_link" href="descargas.php"><li class="menu_list">Formatos</li></a>
			<a class="menu_link" href="programas.php"><li class="menu_list">Programas</li></a>
			<a class="menu_link" href="grado.php"><li class="menu_list">Grado</li></a>
			<a class="menu_link" href="contacto.php"><li class="menu_list">Contacto</li></a>			
		</ul>
	</nav>

	<!--encabezado-->
	<div class="contendor">
		<div class="caja_imagenes">
			<img class="imagenes" src="imagenes/udo_logo.png">
			<h1>Comisión de Trabajos de Grado</h1>
			<img class="imagenes" src="imagenes/petroleo.png">
		</div>

		<h2>Departamento de Petróleo</h2>

		<!--formulario-->
		<form action="consulta.php" method="post">
			<div class="mini_bloque">
				<input type="number" name="cedula" placeholder="Número de cédula" pattern="[0-9]{7,8}" required>
			</div>
			<div class="mini_bloque">
				<input type="number" name="pip" placeholder="Número PIP" pattern="[0-9]{5}" required>
			</div>
			<input type="submit" value="Enviar">
		</form>
		
		<h2>AVISO: La comisión atenderá los dias Viernes de 8 a 10 am en el departamento...</h2>
		<h2>Última actualización: 23 de Mayo 2019, 06:53 pm</h2>
	</div>
</body>
</html>