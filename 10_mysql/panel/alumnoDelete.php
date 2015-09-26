<?php

require_once("../connection.php");

$id = $_GET["id"];

$delete_alumno = "DELETE FROM alumnos WHERE id=" . $id;

if ($conn->query($delete_alumno) === TRUE) {
	header('location: http://localhost:8888/php-course/10_mysql/alumnos-lista.php');
}else{
	echo "Error al eliminar " . $conn->error;
}

?>