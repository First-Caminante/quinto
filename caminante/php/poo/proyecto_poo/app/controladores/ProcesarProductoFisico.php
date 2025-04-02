<?php
require_once __DIR__ . '/../clases/ProductoFisico.php';
require_once __DIR__ . '/../funciones.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = validarString(filter_input(INPUT_POST, 'nombre'));
  $precio = validarDecimal(filter_input(INPUT_POST, 'precio'));
  $peso = validarDecimal(filter_input(INPUT_POST, 'peso'));

  if (empty($nombre) || $precio <= 0 || $peso <= 0) {
    echo "❌ Error: Datos inválidos.";
  } else {
    $productoFisico = new ProductoFisico($nombre, $precio, $peso);
    $productoFisico->mostrarInformacion();
  }
}
