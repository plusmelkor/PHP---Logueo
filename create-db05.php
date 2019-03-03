<?php

	// Connection info. file
	$dbhost	= "localhost";	   // localhost or IP
	$dbuser	= "root";		  // database username
	$dbpass	= "";		     // database password

	//Creacion de la Base de Datos
	
	$dbname	= "PHPLogin";    // database name
	$table = "users";
	$colm01 = "id int";
	$colm02 = "name varchar(64)";
	$colm03 = "email varchar(64)";
	$colm04 = "password varchar(256)";
	$prim = "PRIMARY KEY (id)";

	$csql = "CREATE DATABASE ".$dbname;

	$sql = "CREATE TABLE IF NOT EXISTS ".$table." (".
                  $colm01." NOT NULL,".
                  $colm02." NOT NULL,".
                  $colm03." NOT NULL,".
                  $colm04." NOT NULL,".
                  $prim.")";
	
	// Connection variables
	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$db = $conn->query($csql);

	if ($db) {
    	echo "La base de datos se creó correctamente. ";
    	$conn->select_db($dbname);
    	if ($conn->query($sql)) {
    		echo "Tabla se creó correctamente. ";
    	} else {
    		echo "Error al crear la tabla. ";
    	}
	} else {
    	echo "Error al crear la base de datos. ";
	}

	$conn->close();

?>