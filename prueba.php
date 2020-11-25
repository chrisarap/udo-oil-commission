<?php
	// llamar a conexion.php
	require ('conexion.php');
	
	//validar usuario
	$fila = mysqli_num_rows($resultado);

	// condicion entrar o salir
	if($fila){
		require('consulta.php');		
	} else{
		require('index.php');
	}

	// cerrar la conexion a la base de datos
	mysqli_close($conexion);
?>	