<?php
require_once("connection.php");

$alumnos_lista = "SELECT * FROM alumnos";

//echo $alumnos_lista;

$lista = $conn->query($alumnos_lista);

//print_r($lista);

if($lista->num_rows > 0){
	// $row = $lista->fetch_assoc();
	// print_r($lista->fetch_assoc());
	while($row = $lista->fetch_assoc()){
		echo "Nombre: " . $row["nombre"];
		echo "Apellido Paterno: " .  $row["app"];
		echo "Apellido Materno: " .  $row["apm"];

		echo "<br>";
	}

}
?>