<?php

interface Mensaje
{
  public function enviar(): void;
}


class Email implements Mensaje
{
  public $mensaje;
  public function __construct($mensaje)
  {
    $this->mensaje = $mensaje;
  }

  public function enviar(): void
  {
    echo "hola se envio el mensaje $this->mensaje por email<br>";
  }
}

class Sms implements Mensaje
{
  public $mensaje;
  public function __construct($mensaje)
  {
    $this->mensaje = $mensaje;
  }

  public function enviar(): void
  {
    echo "hola se envio el mensaje $this->mensaje por Sms<br>";
  }
}

$sms = new Sms("CAMINANTE SMS");
$email = new Email("CAMINANTE EMAIL");



#funcion polimorfica que puede recibir distintos metodos y comportarse 
#diferente 
function notificar(Mensaje $mess)
{
  $mess->enviar();
}



notificar($sms);
notificar($email);
