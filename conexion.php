<?php
	// variables para la conexion a la base de datos
	$servidor = "localhost";
	$nombreBaseDatos = "anteproyecto";
	$usuario = "root";
	$clave = "";

	// conexion a base de datos
	$conexion = mysqli_connect($servidor, $usuario, $clave);
	$db = mysqli_select_db($conexion, $nombreBaseDatos);

	// variables introducidas por el usuario
	$pip = mysqli_real_escape_string($conexion, $_POST["pip"]);
	$cedula = mysqli_real_escape_string($conexion, $_POST["cedula"]);	

	// consulta a la base de datos
	$consulta = "SELECT * FROM Table1 WHERE CI = '$cedula' && PIP = '$pip'";
	$resultado = mysqli_query($conexion, $consulta);
?>