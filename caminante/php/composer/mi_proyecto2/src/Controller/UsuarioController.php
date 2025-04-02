<?php

namespace App\Controller;

use App\Model\UsuarioModel;

class UsuarioController extends BaseController
{
  private $usuarioModel;

  public function __construct()
  {
    $this->usuarioModel = new UsuarioModel();
  }

  public function mostrarFormulario()
  {
    $this->renderView('registro');
  }

  public function registrarUsuario()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nombre = htmlspecialchars($_POST['nombre']);
      $email = htmlspecialchars($_POST['email']);

      /*$nombre = "juan";
      $email = "juan@gmail.com";
       */
      if ($this->usuarioModel->guardarUsuario($nombre, $email)) {
        echo "<p>✅ Usuario registrado con éxito.</p>";
      } else {
        echo "<p>❌ Error al registrar el usuario.</p>";
      }
    }

    $this->mostrarFormulario();
  }

  public function listarUsuarios()
  {
    $usuarios = $this->usuarioModel->obtenerUsuarios();
    $this->renderView('lista', ['usuarios' => $usuarios]);
  }
}
