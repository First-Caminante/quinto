<?php
require_once __DIR__ . '/../clases/ProductoDigital.php';
require_once __DIR__ . '/../funciones.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = validarString(filter_input(INPUT_POST, 'nombre'));
  $precio = validarDecimal(filter_input(INPUT_POST, 'precio'));
  $tamanoArchivo = validarDecimal(filter_input(INPUT_POST, 'tamano_archivo'));

  if (empty($nombre) || $precio <= 0 || $tamanoArchivo <= 0) {
    echo "❌ Error: Datos inválidos.";
  } else {
    $productoDigital = new ProductoDigital($nombre, $precio, $tamanoArchivo);
    $productoDigital->mostrarInformacion();
  }
}
