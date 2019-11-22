<?php 

	//echo(var_dump($_POST));
	$matricula = $_POST['matricula'];

	$nombre_fichero = 'C:\wamp64\www\practicantes\ '.$matricula.'.pdf';

	//echo "$nombre_fichero";

if (file_exists($nombre_fichero)) {
    echo "El fichero $nombre_fichero ya existe";
	} else {
	    echo "El fichero $nombre_fichero no existe";
	}

 ?>