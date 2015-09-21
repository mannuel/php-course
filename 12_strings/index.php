<?php
$br = "<br>";

// Cuenta los caracteres de una cadena
echo strlen("Hola mundo") . $br;

// cuenta las palabras de un string
echo str_word_count("hola mundo entero") . $br;

// muestra una cadena al reverso
echo strrev("Hola mundo") . $br;

// cuenta los posiciones de los caracteres previos a la palabra buscada
echo strpos("hola morelos bienvenido", "o") .$br;

// sustituye un string dentro de otro
echo str_replace("hola", "hi", "hola mundo");

// Convierte un string en arreglo a partir de un delimitador
$str = "univac, universidad, cuernavaca, licenciaturas, ingenieria";
print_r(explode(",",$str));

echo $br;

// encripta un string
echo md5("hola");

?>