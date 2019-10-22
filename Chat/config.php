<?php



	$con = new mysqli('localhost', 'root', '', 'mychat');

	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}

?>