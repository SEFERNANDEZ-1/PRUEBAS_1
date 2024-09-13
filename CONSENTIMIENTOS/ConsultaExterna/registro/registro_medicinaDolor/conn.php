<?php
	$server="localhost";
	$user="root";
	$pass="";
	$db="dolormed";
	$connexion = new mysqli($server,$user,$pass,$db);

	if ($connexion->connect_errno) {

		die("la conexion ha fallado".$connexion->connect_errno);
	}		 

?>
