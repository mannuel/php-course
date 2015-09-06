<?php
require_once("connection.php");

$tableName = $_POST["table"];

// sql to create table
$sql = "CREATE TABLE " . $tableName . " (id INT(6) AUTO_INCREMENT PRIMARY KEY, Nombre VARCHAR(50) NOT NULL);";

echo $sql;

if ($conn->query($sql) === TRUE){
	echo "la tabla se creo";
} else {
	echo "error al crear la tabla " . $conn->error;
}
?>