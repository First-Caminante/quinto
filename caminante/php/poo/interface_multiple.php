<?php

interface Enviar
{
  public function enviar(): void;
}
interface Registrar
{
  public function registrar(): void;
}


class Notificador implements Enviar, Registrar
{

  private $mensaje;
  private $registro;

  public function __construct($mensaje, $registro)
  {
    $this->registro = $registro;
    $this->mensaje = $mensaje;
  }

  public function enviar(): void
  {
    echo "se envia el mensaje: $this->mensaje<br>";
  }
  public function registrar(): void
  {
    echo "se registro lo siguiente: $this->registro<br>";
  }
}

$not = new Notificador("mensaje del caminante...", "caminante");

$not->enviar();
$not->registrar();
