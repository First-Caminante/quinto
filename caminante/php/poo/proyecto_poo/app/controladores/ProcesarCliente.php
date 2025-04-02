<?php
require_once __DIR__ . '/../clases/Cliente.php';
require_once __DIR__ . '/../funciones.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = validarString(filter_input(INPUT_POST, 'nombre'));
  $edad = validarEntero(filter_input(INPUT_POST, 'edad'));
  $email = validarEmail(filter_input(INPUT_POST, 'email'));

  if (empty($nombre) || $edad <= 0 || empty($email)) {
    echo "❌ Error: Datos inválidos.";
  } else {
    $cliente = new Cliente($nombre, $edad, $email);
    mostrarInformacionUsuario($cliente);
  }
}
