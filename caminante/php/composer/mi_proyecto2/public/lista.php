<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\UsuarioController;

$usuarioController = new UsuarioController();
$usuarioController->listarUsuarios();
