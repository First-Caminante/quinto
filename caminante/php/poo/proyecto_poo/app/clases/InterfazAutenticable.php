<?php

// Interfaz para autenticación segura
interface InterfazAutenticable
{
  public function autenticar(string $usuario, string $clave): bool;
}
