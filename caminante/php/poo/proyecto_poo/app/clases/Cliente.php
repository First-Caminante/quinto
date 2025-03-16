<?php


// Clase Cliente
class Cliente extends BaseUsuario implements InterfazAutenticable
{
  private string $clave;

  public function __construct(string $nombre, string $email, string $clave)
  {
    parent::__construct($nombre, $email);
    $this->clave = $clave;
  }

  public function autenticar(string $usuario, string $clave): bool
  {
    return $usuario === $this->nombre && $clave === $this->clave;
  }

  public function mostrarDatos(): void
  {
    echo "Cliente: $this->nombre, Email: $this->email <br>";
  }
}
