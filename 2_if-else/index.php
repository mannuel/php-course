<?php

/*
	IF
	Si la expresión se evalúa como TRUE, PHP ejecutará la sentencia y si se evalúa como FALSE la ignorará.

	ELSEIF
	elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, extiende 
	una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como FALSE.
	Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión condicional del
	elseif se evalúa como TRUE.
*/

$a = "2";
$b = 2;

if ($a > $b) {
	echo "a es mayor que b";
} elseif ($a == $b) {
	echo "a es igual que b";
} else {
	echo "a es menor que b";
}

?>