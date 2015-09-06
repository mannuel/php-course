<?php

/*
	La sentencia switch es similar a una serie de sentencias IF en la misma expresión.
	En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión)
	con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual.
*/

$colorfav = "rosa";

switch ($colorfav) {
	case "rojo":
		echo "Tu color favorito es rojo!";
		break;

	case "azul":
		echo "Tu color favorito es azul!";
		break;

	case "verde":
		echo "Tu color favorito es verde!";
		break;

	case "rosa":
		echo "Tu color favorito es rosa!";
		break;

	default:
		echo "Tu color favorito no es rojo, azul o verde!";
}
?>