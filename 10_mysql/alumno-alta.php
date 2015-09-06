<?php
require_once("connection.php");

$nombre = $_POST["nombre"];
$app = $_POST["app"];
$apm = $_POST["apm"];

// echo $nombre . " " . $app . " " . $apm;

$alta_alumno = "INSERT INTO alumnos (nombre,app,apm) values (' $nombre ', ' $app', ' $apm');";

//echo $alta_alumno;

if ($conn->query($alta_alumno) === TRUE){
	echo "datos ingresados";
} else {
	echo "datos no ingresados " . $conn->error;
}
?>