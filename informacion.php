<?php 
	/*
	El manejo de versiones mediante 3 números: X.Y.Z:

	X - versión mayor: versión principal del software. Ejemplo: 1.0.0
	Y - versión menor: nuevas funcionalidades. Ejemplo: 1.2.0
	Z - revisión: se hizo una revisión del código por algun fallo. Ejemplo: 1.2.2

	¿cómo sabemos cuando cambiarlos y cuál cambiar?

	Versión mayor o X, cuando agreguemos nuevas funcionalidades importantes, puede ser como un nuevo modulo o característica clave para la funcionalidad.

	Versión menor o Y, cuando hacemos correcciones menores, cuando arreglamos un error y se agregan funcionalidades que no son cruciales para el proyecto.

	Revisión o Z, cada vez que entregamos el proyecto.
	*/

	static $version_x = 1;
	static $version_y = 1;
	static $version_z = 0;
	$fecha = "01/06/2019";
	$hora = "01:43:am";	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="imagenes/udo_logo.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<title>Información</title>
</head>
<body>
	<?php require("elementos/menu.php"); ?>

	<h1><?php echo "versión: $version_x.$version_y.$version_z"; ?></h1>
	<h2><?php echo "última modificación" ?></h2>
	<h3><?php echo "$fecha"; ?></h3>
	<h3><?php echo "$hora"; ?></h3>
</body>
</html>