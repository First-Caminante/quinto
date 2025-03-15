<?php

class Persona
{
  public $nombre;
  protected $edad;

  public function __construct($nombre, $edad)
  {
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  public function presentarse()
  {
    echo "hola soy $this->nombre y tengo $this->edad<br>";
  }
}


class Estudiante extends Persona
{
  public $carrera;
  public function __construct($nombre, $edad, $carrera)
  {
    parent::__construct($nombre, $edad);
    $this->carrera = $carrera;
  }

  public function mostrar_carrera()
  {
    echo "Estoy estudiando $this->carrera";
  }
}


$est1 = new Estudiante("caminante", 25, "ETC");

$est1->presentarse();
$est1->mostrar_carrera();
