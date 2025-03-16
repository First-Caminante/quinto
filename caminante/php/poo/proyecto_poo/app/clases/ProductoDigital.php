<?php


// Clase ProductoDigital
class ProductoDigital extends BaseProducto
{
  private string $formato;

  public function __construct(string $nombre, float $precio, string $formato)
  {
    parent::__construct($nombre, $precio);
    $this->formato = $formato;
  }

  public function mostrarInformacion(): void
  {
    echo "Producto Digital: $this->nombre, Precio: \$$this->precio, Formato: $this->formato <br>";
  }
}
