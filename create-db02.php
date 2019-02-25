<?php

	// Connection info. file
	$dbhost	= "localhost";	   // localhost or IP
	$dbuser	= "root";		  // database username
	$dbpass	= "";		     // database password
	$dbname	= "PHPLogin";    // database name
	
	// Connection variables
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	if (mysqli_query($conn , 'CREATE DATABASE '.$dbname)) {
    	echo "La base de datos mi_bd se creó correctamente\n";
	} else {
    	echo "Error al crear la base de datos:\n";
	}
	mysqli_close($conn);

?>