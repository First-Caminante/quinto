<?php

echo "<h1>AQUI EL EJEMPLO DE FUNCIONES ANONIMAS CON VALOR
PREDETERMINADO </h1>";

$saludar = function ($nombre = "Desconocido") {
  return "Hola como estas $nombre" . "<br>";
};

$name = "Caminante";

echo $saludar($name);

echo $saludar();

echo "<h1>AQUI EL EJEMPLO DE FUNCIONES ARROW => </h1>";

$cuadrado = fn($num) => $num * $num;

echo "el cuadrado de 9 es " . $cuadrado(9) . "<br>";
