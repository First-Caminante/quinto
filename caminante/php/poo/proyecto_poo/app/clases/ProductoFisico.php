<?php

require_once __DIR__ . '/BaseProducto.php';

// Clase ProductoFísico
class ProductoFisico extends BaseProducto
{
  private float $peso;

  public function __construct(string $nombre, float $precio, float $peso)
  {
    parent::__construct($nombre, $precio);
    $this->peso = $peso;
  }

  public function mostrarInformacion(): void
  {
    echo "Producto Físico: $this->nombre, Precio: \$$this->precio, Peso: {$this->peso}kg <br>";
  }
}
