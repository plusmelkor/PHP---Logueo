<!doctype html>

<html lang="en">
	<head>
		<title>Crea una Base de Datos con un nombre especifico</title>
	</head>
	<body>

		<form method="post" action="create-db.php" method="POST">
			<input type="text" name="dbname">
			</br>
			<button type="submit">Ingresa un nombre</button>
		</form>
<?php
	if (isset($_POST["dbname"])){
	// Connection info. file
	include 'conn.php';	
	
	// Connection variables
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	if (mysqli_query($conn , 'CREATE DATABASE '.$_POST["dbname"])) {
    	echo "La base de datos mi_bd se creó correctamente\n";
	} else {
    	echo "Error al crear la base de datos:\n";
	}
	mysqli_close($conn);
}?>
	</body>
</html>

<!-- 
Este codigo crea una Base de Datos con el nombre que se
ingresa en el cuadro de texto.
El detalle es que requiere cargar un archivo externo conn.php
-->