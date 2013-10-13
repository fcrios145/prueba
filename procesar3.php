<?php 
	$nombre = $_POST['cajaNombre'];
	$mail = $_POST['cajaMail'];
	$mensaje = $_POST['cajaGrande'];
	$servicio = $_POST['radioButton'];

	echo "$nombre, $mail, $mensaje, $servicio";

	$longitud = strlen($nombre) * strlen($mail) * strlen($mensaje) *strlen($servicio);

   	

	require("conectar.php");
	mysql_query("INSERT INTO prueba VALUES('','$nombre','$mail','$mensaje','$servicio')");
	mysql_close($link);

 ?>