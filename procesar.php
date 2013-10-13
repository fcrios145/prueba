<?php 
	

    // Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
    if(isset($_POST['cajaNombre']) && !empty($_POST['cajaNombre']) &&
    isset($_POST['cajaMail']) && !empty($_POST['cajaMail']) &&
    isset($_POST['radioButton']) && !empty($_POST['radioButton']) &&
    isset($_POST['cajaGrande']) && !empty($_POST['cajaGrande'])) {

        // Si entramos es que todo se ha realizado correctamente

        $link = mysql_connect("localhost","kriz","rios");
        mysql_select_db("miPrimeraPagina",$link);

        // Con esta sentencia SQL insertaremos los datos en la base de datos
        mysql_query("INSERT INTO prueba (nombre, mail, msj, servicio)
        VALUES ('{$_POST['cajaNombre']}','{$_POST['cajaMail']}','{$_POST['cajaGrande']}')",$link);

        // Ahora comprobaremos que todo ha ido correctamente
        $my_error = mysql_error($link);

        if(!empty($my_error) {

            echo "Ha habido un error al insertar los valores. $my_error";

        } else {

            echo "Los datos han sido introducidos satisfactoriamente";

        }

    } else {

        echo "Error, no ha introducido todos los datos";

    }

 ?>