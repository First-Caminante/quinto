<?php

// Clase abstracta para productos
abstract class BaseProducto
{
  protected string $nombre;
  protected float $precio;

  public function __construct(string $nombre, float $precio)
  {
    $this->nombre = $nombre;
    $this->precio = $precio;
  }

  abstract public function mostrarInformacion(): void;
}
