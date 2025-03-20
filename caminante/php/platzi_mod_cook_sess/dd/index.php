<?php

require __DIR__ . "/vendor/autoload.php";

class michi
{

  protected $patas = [];
  protected $color;

  public function __construct(string $color)
  {
    $this->color = $color;
    for ($i = 0; $i < 4; $i++) {
      $this->patas[$i] = new PataDeMichi();
    }
  }
}

class PataDeMichi
{

  protected $unias = 4;
  protected $description = "Tiene manchas";


  public function getDescription(): string
  {
    return $this->description;
  }
}


$casamichi = array(
  "nombre" => "yuxi",
  "ubicacion" => [
    "pais" => "mexico",
    "ciudad" => "la paz",
    "colonia" => "los tuxis",
    "numero" => 27
  ],
  "numero_michis" => 3,
  "michis" => [
    new michi("tigre"),
    new michi("tigre"),
    new michi("tigre")

  ]
);

dd($casamichi);

#echo "<pre>";
#var_dump($casamichi);
#echo "</pre>";
