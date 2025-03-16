<?php

// Clase Administrador
class Administrador extends BaseUsuario implements InterfazAutenticable
{
  private string $clave;
  private string $permisoEspecial;

  public function __construct(string $nombre, string $email, string $clave, string $permisoEspecial)
  {
    parent::__construct($nombre, $email);
    $this->clave = $clave;
    $this->permisoEspecial = $permisoEspecial;
  }


  public function autenticar(string $usuario, string $clave): bool
  {
    return $usuario === $this->nombre && $clave === $this->clave;
  }

  public function mostrarDatos(): void
  {
    echo "Administrador: $this->nombre, Email: $this->email, Permiso: $this->permisoEspecial <br>";
  }
}
