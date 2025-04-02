<?php

namespace App\Model;

class UsuarioModel
{
  public function obtenerUsuarios()
  {
    return [
      ['id' => 1, 'nombre' => 'Juan Perez'],
      ['id' => 2, 'nombre' => 'María Lopez'],
    ];
  }
}
