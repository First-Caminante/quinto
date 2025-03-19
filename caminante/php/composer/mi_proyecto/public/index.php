<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Carga automática con Composer

use App\Controller\Usuario;
use App\Controller\Producto;
use App\Utils\Helper;

$usuarioController = new Usuario();
$productoController = new Producto();

echo "<h2>Usuarios</h2>";
echo "<pre>" . json_encode($usuarioController->getUsuarios(), JSON_PRETTY_PRINT) . "</pre>";

echo "<h2>Productos</h2>";
echo "<pre>" . json_encode($productoController->getProductos(), JSON_PRETTY_PRINT) . "</pre>";

echo "<h2>Formato de Moneda</h2>";
echo Helper::formatoMoneda(1500.75);
