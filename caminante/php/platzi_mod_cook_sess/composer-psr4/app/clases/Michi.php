<?php

namespace App\clases;

class Michi
{

  public $nombre;
  public $edad;
  public $color;

  public function __construct(string $nombre, int $edad, string $color)
  {
    $this->color = $color;
    $this->edad = $edad;
    $this->nombre = $nombre;
  }

  public function getcolor()
  {
    return $this->color;
  }
}
