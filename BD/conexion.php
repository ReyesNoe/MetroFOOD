<?php 
	
	$host = "localhost";
	$user = "root";
	$pass = "Itca123!";
	$db_name = "MetroFoodDB";
	 
	$conexion = new mysqli($host, $user, $pass, $db_name);
	if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}

 ?>