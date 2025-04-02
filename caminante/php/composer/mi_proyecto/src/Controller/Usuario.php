<?php

namespace App\Controller;

use App\Model\UsuarioModel;

class Usuario extends BaseController
{
  public function getUsuarios()
  {
    $modelo = new UsuarioModel();
    return $modelo->obtenerUsuarios();
  }
}
