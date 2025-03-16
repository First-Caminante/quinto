<?php
session_start();

// Función polimórfica para mostrar datos de usuarios
function mostrarInformacionUsuario(BaseUsuario $usuario)
{
  $usuario->mostrarDatos();
}

// Manejo de formulario para clientes y productos
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';

  if ($tipo === 'cliente') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?? '';
    $clave = filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';

    if ($nombre && $email && $clave) {
      $cliente = new Cliente($nombre, $email, $clave);
      mostrarInformacionUsuario($cliente);
    } else {
      echo "❌ Error en los datos del cliente.";
    }
  }

  if ($tipo === 'producto_fisico') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
    $precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT) ?? 0.0;
    $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT) ?? 0.0;

    if ($nombre && $precio && $peso) {
      $producto = new ProductoFisico($nombre, $precio, $peso);
      $producto->mostrarInformacion();
    } else {
      echo "❌ Error en los datos del producto físico.";
    }
  }

  if ($tipo === 'producto_digital') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
    $precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT) ?? 0.0;
    $formato = filter_input(INPUT_POST, 'formato', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';

    if ($nombre && $precio && $formato) {
      $producto = new ProductoDigital($nombre, $precio, $formato);
      $producto->mostrarInformacion();
    } else {
      echo "❌ Error en los datos del producto digital.";
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Gestión de Datos</title>
</head>

<body>
  <h1>Registro de Clientes y Productos</h1>

  <form method="POST">
    <input type="hidden" name="tipo" value="cliente">
    <label>Nombre:</label>
    <input type="text" name="nombre"><br>
    <label>Email:</label>
    <input type="email" name="email"><br>
    <label>Clave:</label>
    <input type="password" name="clave"><br>
    <input type="submit" value="Registrar Cliente">
  </form>

  <form method="POST">
    <input type="hidden" name="tipo" value="producto_fisico">
    <label>Nombre del Producto:</label>
    <input type="text" name="nombre"><br>
    <label>Precio:</label>
    <input type="text" name="precio"><br>
    <label>Peso (kg):</label>
    <input type="text" name="peso"><br>
    <input type="submit" value="Registrar Producto Físico">
  </form>

  <form method="POST">
    <input type="hidden" name="tipo" value="producto_digital">
    <label>Nombre del Producto:</label>
    <input type="text" name="nombre"><br>
    <label>Precio:</label>
    <input type="text" name="precio"><br>
    <label>Formato:</label>
    <input type="text" name="formato"><br>
    <input type="submit" value="Registrar Producto Digital">
  </form>
</body>

</html>
