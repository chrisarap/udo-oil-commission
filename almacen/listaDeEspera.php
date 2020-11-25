<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="udo_logo.png">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<title>Datos del estudiante</title>
</head>

<body>
	<div class="contenedor">
		<?php
			mysql_connect("localhost", "root", "") or
			die("No se pudo conectar: " . mysql_error());
			mysql_select_db("anteproyecto");

			$resultado = mysql_query("SELECT * FROM Table1");

			echo "<table>";	// inicio de la tabla
			while ($fila = mysql_fetch_array($resultado, MYSQL_NUM)) {

				if ($fila[24]) {			// solo las que han sido enviadas a direccion
					if (!$fila[25]) {		// solo las que no han sido aprobadas

						$fechaActual = date('d/m/Y');
						$diferencia = $fechaActual - $fila[24];


						echo "<tr><td>$fila[1]</td>";		// id
						echo "<td>$fila[2]</td>";			// apellidos
						echo "<td>$fila[3]</td>";			// nombres
						echo "<td>$fila[24]</td>";			// envio a direccion
						echo "<td>$fechaActual</td>";		// fecha de hoy
						echo "<td>$diferencia</td></tr>";	// diferencia entre fechas
					}
				}  
			}
			echo "</table>"; // final de la tabla
			mysql_free_result($resultado);
		?>
	</div>
</body>