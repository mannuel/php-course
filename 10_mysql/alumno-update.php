<?php
require_once("connection.php");

$id_alumno = $_POST["id_alumno"];
$nombre_alumno = $_POST["nombre"];

$update_alumno = "UPDATE alumnos SET nombre = '" . $nombre_alumno . "' WHERE id=" . $id_alumno;

//echo $update_alumno;

if ($conn->query($update_alumno) === TRUE) {
	echo "Registro actualizado";
}else{
	echo "Error en la actualizacion " . $conn->error;
}
?>