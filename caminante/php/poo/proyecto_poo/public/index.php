<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../app/controladores/ProcesarCliente.php';
require_once __DIR__ . '/../app/controladores/ProcesarProductoFisico.php';
require_once __DIR__ . '/../app/controladores/ProcesarProductoDigital.php';


?>

<!DOCTYPE html>
<html>

<head>
  <title>Gestión de Datos</title>
</head>

<body>
  <h1>Registro de Cliente</h1>
  <form method="POST" action="../app/controladores/ProcesarCliente.php">
    Nombre: <input type="text" name="nombre"><br>
    Edad: <input type="number" name="edad"><br>
    Correo: <input type="email" name="email"><br>
    <input type="submit" value="Registrar Cliente">
  </form>

  <h1>Registro de Producto Físico</h1>
  <form method="POST" action="/app/controladores/ProcesarProductoFisico.php">
    Nombre: <input type="text" name="nombre"><br>
    Precio: <input type="number" step="0.01" name="precio"><br>
    Peso (kg): <input type="number" step="0.01" name="peso"><br>
    <input type="submit" value="Registrar Producto Físico">
  </form>

  <h1>Registro de Producto Digital</h1>
  <form method="POST" action="/app/controladores/ProcesarProductoDigital.php">
    Nombre: <input type="text" name="nombre"><br>
    Precio: <input type="number" step="0.01" name="precio"><br>
    Tamaño del archivo (MB): <input type="number" step="0.01" name="tamano_archivo"><br>
    <input type="submit" value="Registrar Producto Digital">
  </form>
</body>

</html>
