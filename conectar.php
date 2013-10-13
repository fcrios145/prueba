<?php 

	$link = mysql_connect("localhost","root","rios");
	if($link) {
		mysql_select_db("miPrimeraPagina",$link);
	} else {
		echo "No se pudo conectar";
	}
 ?>