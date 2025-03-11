<?php
class Persona{

  public $nombre = "Pedro";

  public function hablar($mensaje){
    echo $mensaje;
  }

}


// instanciamos el objeto
$persona = new Persona();

// para acceder a un metodo o atributo de una
//clase lo hacemos con
echo $persona->nombre."<hr>";


$persona->hablar("este es un mensaje...");


?>
