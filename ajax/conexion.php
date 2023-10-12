<?php

	$mysqli=new mysqli('185.206.160.1','u690371019_zuno','B07SRoAa]','u690371019_zuno');
	//$mysqli=new mysqli('localhost','root','','u690371019_zuno');

	if ($mysqli->connect_errno) {

		echo "No se ha podido conectar con el servidor, error: ".mysqli->connect_error;;
		// code...
	}