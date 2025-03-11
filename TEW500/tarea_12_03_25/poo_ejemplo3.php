<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Loteria
{


  //dtrihutos
  public $numero;
  public $intentos;
  public $resultado = false;


  public function __construct($numero, $intentos)
  {
    $this->numero = $numero;
    $this->intentos = $intentos;
  }




  public function sortear()
  {

    //eeneraremos un numero aleatorio desde la mitad del
    //numero enviado hasta el doble del numero
    $minimo = $this->numero / 2;
    $maximo = $this->numero * 2;

    for ($i = 0; $i < $this->intentos; $i++) {


      $int = rand($minimo, $maximo);
      self::intentos($int);
    }
  }


  public function intentos($int)
  {

    if ($int == $this->numero) {
      echo "<b>" . $int . "==" . $this->numero . "</b><br>";
      $this->resultado = true;
    } else {
      echo $int . "!=" . $this->numero . "<br>";
    }
  }


  public function __destruct()
  {
    // Isi el atributo resultado existe o es verdadero quiere

    if ($this->resultado) {
      echo "Felicidades ganaste en " . $this->intentos . " intentos"; # code...
    } else {
      echo "que pena perdiste en " . $this->intentos . " intentos";
    }
  }
}


$loteria = new Loteria(20, 50);
$loteria->sortear();
