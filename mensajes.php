<?php
	$mensaje = "";

	// numero de columnas
	$tamano_tabla = $resultado->field_count;

	// imprimir tabla con campos y registros
	$filaPrueba = mysqli_fetch_row($resultado);
	
	// mensaje sobre el estado del anteproyecto
	if ($filaPrueba[5]) {
		$mensaje = "Su anteproyecto está en revisión";
	}

	if ($filaPrueba[16]) {
		$mensaje = "Las correciones de su proyecto fueron recibidas por esta Comision el día $filaPrueba[16]. Por favor, pase retirando su proyecto en el horario de atención.";
	}

	if ($filaPrueba[17]) {
		$mensaje = "Su proyecto fue retirado por usted el día $filaPrueba[17]. Devolver a la Comisión de Petróleo, en el horario de atención, cuando haya realizado las correciones requeridas";
	}

	if ($filaPrueba[18]) {
		$mensaje = "Su anteproyecto está en revisión";
	}

	if ($filaPrueba[19]) {
		$mensaje = "Su proyecto fue aprobado por la Comisión de Petróleo el día $filaPrueba[19]. Se enviará a la Comisión Central lo más pronto posible";
	}

	if ($filaPrueba[24]) {
		$mensaje = "Su proyecto fue enviado a Comisión Central el día $filaPrueba[24]";
	}

	if ($filaPrueba[25]) {
		$mensaje = "El formato CTGIP-06 fue firmado por esta Comisión el día $filaPrueba[25]. Retire este formato en la Comisión Central.";
	}

	echo '<div class = "mensaje">' . $mensaje . '</div>';
?>