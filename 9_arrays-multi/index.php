<?php
$cars = array(
		array("Volvo",22,18),
		array("BMW",15,13),
		array("Toyota",5,2)
	);
echo "<pre>";
print_r($cars);
echo "</pre>";

echo $cars[0][0];
echo "<br>";
echo $cars[1][0];
?>