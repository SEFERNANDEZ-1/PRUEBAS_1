<?php
	$server="localhost";
	$user="junior";
	$pass="123456789";
	$db="dolormet";
	$connexion = new mysqli($server,$user,$pass,$db);

	if ($connexion->connect_errno) {

		die("la conexion ha fallado".$connexion->connect_errno);
	}

?>
