<?php

use App\clases\MichisAdoptados;
use App\clases\Michi;

class CreateMichi extends MichisAdoptados
{


  public function crearyuxi(): string
  {
    $michi = new Michi("yuxi", 3, "tigreM");

    return "hola soy {$michi->nombre},tengo {$michi->edad} anios y soy {$michi->color}" . parent::presentar();
  }
}

function yuxi()
{
  $yuxi = new CreateMichi();
  echo $yuxi->crearyuxi();
}
