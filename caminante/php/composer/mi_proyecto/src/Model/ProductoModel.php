<?php

namespace App\Model;

class ProductoModel
{
  public function obtenerProductos()
  {
    return [
      ['id' => 101, 'nombre' => 'Laptop'],
      ['id' => 102, 'nombre' => 'Telefono'],
      ['id' => 333, 'nombreC' => 'PCaminantePro']
    ];
  }
}
