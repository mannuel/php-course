<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "escuela";

// Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Conexion fallida");
}
?>