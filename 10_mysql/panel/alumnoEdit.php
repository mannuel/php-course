<?php

require_once("../connection.php");

$id = $_GET["id"];
$action = $_POST["action"];

$nombre = $_POST["nombre"];
$app    = $_POST["app"];
$apm    = $_POST["apm"];

if ($id != "" AND $action == "update") {
	$update_alumno = "UPDATE alumnos SET 
		nombre = '" . $nombre . "',
		app = '" . $app . "',
		apm = '" . $apm . "' 
		WHERE id=" . $id;

	header('location: http://localhost:8888/php-course/10_mysql/alumnos-lista.php');

	if ($conn->query($update_alumno) === TRUE) {
		echo "Registro actualizado";
	}else{
		echo "Error en la actualizacion " . $conn->error;
	}
}elseif ($id == "" AND $action == "add") {
	$alta_alumno = "INSERT INTO alumnos (nombre,app,apm) values (' $nombre ', ' $app', ' $apm');";
	// echo $alta_alumno;
	//echo $alta_alumno;

	if ($conn->query($alta_alumno) === TRUE){
		header('location: http://localhost:8888/php-course/10_mysql/alumnos-lista.php');
	} else {
		echo "datos no ingresados " . $conn->error;
	}
}



if ($id != "") {
	$alumno_query = "SELECT * FROM alumnos WHERE id = " . $id;

	$a_Alumno = $conn->query($alumno_query);
	$row = $a_Alumno->fetch_assoc();

	$frm_action  = "update";
}else{
	$frm_action = "add";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alta de Alumno</title>
</head>
<body>
	<form action="" method="post">
		<input type="hidden" name="action" value="<?php echo $frm_action; ?>">

		<label>Nombre</label>
		<input type="text" name="nombre" value="<?php echo $row["nombre"]; ?>" required>

		<label>Apellido Paterno</label>
		<input type="text" name="app" value="<?php echo $row["app"]; ?>" required>

		<label>Apellido Materno</label>
		<input type="text" name="apm" value="<?php echo $row["apm"]; ?>" required>

		<button type="submit">Guardar</button>
	</form>
</body>
</html>