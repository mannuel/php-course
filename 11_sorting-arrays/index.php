<?php

/*
Los Arrays pueden ser ordenados de distintas formas, tales como:

sort() - ordena los arreglos de forma ascendente
rsort() - ordena los arreglos de forma descendente
asort() - ordena un array manteniendo la correlacion de los indices del array con los elementos con los que estan asociados
ksort() - ordena un array por clave, manteniendo la correlacion entre la clave y los datos
arsort() - ordena un array de manera que los indices del array mantienen su correlacion con los elementos del array asociados
krsort() - Ordena un array por clave en orden inverso, manteniendo la correlacion entre la clave y los datos

Referencia -> http://www.php.net
*/

// #sort
// $frutas = array("limon", "naranja", "banana", "albaricoque");
// sort($frutas);
// foreach ($frutas as $clave => $valor) {
//     echo "frutas[" . $clave . "] = " . $valor . "\n";
// }

// echo "<br>";

// // #rsort
// $fruits = array("limon", "naranja", "platano", "manzana");
// rsort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val\n";
// }

// // #asort
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// asort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val\n";
// }
// echo "Las frutas han sido ordenadas alfabeticamente, y se ha mantenido el indice asociado con cada elemento.";

// #ksort
// $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
// ksort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val\n";
// }

// // #arsort
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// arsort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val\n";
// }
// echo "Las frutas han sido ordenadas en orden inverso alfabético, se ha mantenido el indice asocidado con cada elemento.";

// // #krsort
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>