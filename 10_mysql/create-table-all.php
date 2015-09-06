<?php
require_once("connection.php");

$tableName = $_POST["table"];

if ($tableName !="") {

	// sql to create table
	$sql = "CREATE TABLE " . $tableName . " (id INT(6) AUTO_INCREMENT PRIMARY KEY, Nombre VARCHAR(50) NOT NULL);";

	echo $sql;

	if ($conn->query($sql) === TRUE){
		echo "la tabla se creo";
	} else {
		echo "error al crear la tabla " . $conn->error;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear tabla en MySQL</title>
</head>
<body>
	<form action="" method="post">
		<label>Nombre de la tabla</label>
		<input type="text" name="table" required>

		
		<button type="submit">Crear</button>
	</form>
</body>
</html>