<?php

namespace App\Controller;

use App\Model\ProductoModel;

class Producto extends BaseController
{
  public function getProductos()
  {
    $modelo = new ProductoModel();
    return $modelo->obtenerProductos();
  }
}
