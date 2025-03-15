<?php

interface Forma
{
  public function area(): float;
}

class Cuadrado implements Forma
{
  private $lado;


  public function __construct($lado)
  {
    $this->lado = $lado;
  }
  public function area(): float
  {
    return $this->lado * $this->lado;
  }
}

class Circulo implements Forma
{
  private $radio;

  public function __construct($radio)
  {
    $this->radio = $radio;
  }

  public function area(): float
  {
    return pi() * pow($this->radio, 2);
  }
}

// Función polimórfica: Recibe cualquier objeto que implemente 'Forma'
function mostrarArea(Forma $figura)
{
  echo "El área es: " . $figura->area() . "<br>";
}

// Ejecución
$cuadrado = new Cuadrado(4);
$circulo = new Circulo(3);

mostrarArea($cuadrado); // El área es: 16
mostrarArea($circulo);  // El área es: 28.27
