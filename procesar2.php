<?php

//Esta linea es para incluir el archivo con las variables

include (“variables.php”);

/* CONECTAR CON BASE DE DATOS **************** */

$con = mysql_connect(HOSTNAME,USER,PASS);

if (!$con){die(‘ERROR DE CONEXION CON MYSQL: ‘ . mysql_error());}

/* ********************************************** */

/* CONECTA CON LA BASE DE DATOS  **************** */

$database = mysql_select_db(“miPrimeraPagina”,$con);

if (!$database){die(‘ERROR CONEXION CON BD: ‘.mysql_error());}

/* ********************************************** */

//REALIZAR CONSULTA

$sql = “INSERT INTO prueba VALUES  (’”.$_POST['cajaNombre'].”‘,’”

.$_POST['cajaMail'].”‘,’”.$_POST['cajaGrande'].”‘,’”.$_POST['radioButton'].”‘)”;

$result = mysql_query($sql);

if (! $result){

echo “La consulta SQL contiene errores.”.mysql_error();

exit();

}else {echo “<center><font color=’RED’>DATOS INSERTADOS CORRECTAMENTE</font><a

ref=’#'>Volver</a>”;

}

?>