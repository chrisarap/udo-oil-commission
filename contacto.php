<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="imagenes/udo_logo.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<title>Contacto</title>
</head>
<body>
	<!--menu-->
	<?php require("elementos/menu.php"); ?>

	<div class="temporal">
		<h1>Información de contacto</h1>
	</div>

	<form class="contenedor_correo" method="post" action="correo.php">		
		<input class="text_correo elementos_correo" type="text" name="asunto" placeholder="Asunto del mensaje" required>		
		<textarea class="textarea_correo" name="mensaje" placeholder="Escriba su mensaje aquí..." required></textarea>
		<input class="text_correo elementos_correo" type="text" name="nombre" placeholder="Nombre y apellido" required>
		<input class="text_correo elementos_correo" type="text" name="correo" placeholder="Correo" required>
		<input class="text_correo elementos_correo" type="text" name="pip" placeholder="Número PIP" required>	
		<input class="elementos_correo" type="submit" value="Enviar">
	</form>
</body>
</html>