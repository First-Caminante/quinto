<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\UsuarioController;

$usuarioController = new UsuarioController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $usuarioController->registrarUsuario();
} else {
  $usuarioController->mostrarFormulario();
}
