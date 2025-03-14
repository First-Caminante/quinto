<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $edad = $_POST["edad"];
  echo "Hola $nombre como estas con $edad";

  echo "<h1>AQUI SE ESTAN VALIDANDO DATOS CON if (empty(Snombre)) {
  # code...
}Y CON filter_var(Sedad,FILTER_VALIDATE_INT)</h1>";


  $nombre = trim($_POST['nombre']);
  $edad = trim($_POST['edad']);

  if (empty($nombre)) {
    echo "El nombre es obligatorio.<br>";
  }

  if (!filter_var($edad, FILTER_VALIDATE_INT)) {
    echo "La edad debe ser un número entero válido.<br>";
  } else {
    echo "Datos correctos: $nombre tiene $edad años.";
  }

  echo "<h1>SANEAMIENTO DE DATOS</h1>";

  echo "<h3>eliminamos amenazas de caracteres en text y limpiamos correos electronico</h3>";

  $comentario = htmlspecialchars($_POST["comentario"] ?? '', ENT_QUOTES, 'utf-8');

  echo "comentario libre : " . $comentario . "<br />";

  $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);

  echo "correo electronico limpio: " . $email;
} else {
  echo "ACCESO NO PERMITIDO CAMINANTE...";
}
