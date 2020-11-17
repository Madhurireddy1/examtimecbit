<?php

	$host = "localhost";
	$user = "Mad";
	$pass = "Puliendher1#";
	$database = "examtimedb";

	$conn = new mysqli($host, $user, $pass, $database);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
?>
