<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="imagenes/udo_logo.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<title>Gracias</title>
</head>
<body>
	<?php
		$pip = $_POST["pip"];
		$nombre = $_POST["nombre"];
		$correo = $_POST["correo"];

		$correoComision = "petroleocomision@gmail.com";
		$asunto = $_POST["asunto"];		
		$mensaje = $_POST["mensaje"] . "\n\n" . $pip . "\n" . $nombre . "\n" . $correo;

		if (mail($correoComision, $asunto, $mensaje)){
			echo "correo enviado";
		} else {
			echo "ha salido mal";
		}
	?>
	<form action="index.php">
		<input type="submit" value="regresar">	
	</form>
</body>
</html>