<?php
require_once("connection.php");

$id_user = $_GET["id"];

$alumnos_lista = "SELECT * FROM alumnos ";

if ($id_user!="") {
	$alumnos_lista .= "WHERE id = " . $id_user;
}

//echo $alumnos_lista;

$lista = $conn->query($alumnos_lista);

//print_r($lista);

if($lista->num_rows > 0){
	// $row = $lista->fetch_assoc();
	// print_r($lista->fetch_assoc());
	echo "<a href='panel/alumnoEdit.php'> Agregar Alumno </a>";
	echo "<table border='1'>";
		echo "<tr>";
			echo "<th> Nombre </th>";
			echo "<th> Apellido Paterno </th>";
			echo "<th> Apellido Materno </th>";
			echo "<th> Acciones </th>";
		echo "</tr>";
		while($row = $lista->fetch_assoc()){
			echo "<tr>";
				echo "<td>" . $row["nombre"] . "</td>";
				echo "<td>" . $row["app"] . "</td>";
				echo "<td>" . $row["apm"] . "</td>";
				echo "<td>";
					echo "<a href='panel/alumnoEdit.php?id=". $row["id"] ."'> Actualizar </a>";
					echo "<a href='panel/alumnoDelete.php?id=". $row["id"] ."'> Eliminar </a>";
				echo "</td>";
			echo "</tr>";
		}
	echo "</table>";
}
?>