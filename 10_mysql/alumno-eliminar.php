<?php
require_once("connection.php");

$id_alumno = $_POST["id_alumno"];

$delete_alumno = "DELETE FROM alumnos WHERE id=" . $id_alumno;

echo $delete_alumno;

if ($conn->query($delete_alumno) === TRUE) {
	echo "Registro eliminado";
}else{
	echo "Error al eliminar " . $conn->error;
}
?>