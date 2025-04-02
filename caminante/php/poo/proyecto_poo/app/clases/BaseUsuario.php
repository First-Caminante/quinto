<?php

// Clase abstracta para usuarios
abstract class BaseUsuario
{
  protected string $nombre;
  protected string $email;

  public function __construct(string $nombre, string $email)
  {
    $this->nombre = $nombre;
    $this->email = $email;
  }

  abstract public function mostrarDatos(): void;
}
