<?php


class Persona
{
  public $nombre;  // Propiedad

  // Método constructor
  public function __construct($nombre)
  {
    $this->nombre = $nombre;
  }

  // Método
  public function saludar()
  {
    echo "¡Hola, mi nombre es " . $this->nombre . "!";
  }
}

// Crear un objeto de la clase Persona
$persona = new Persona("Carlos");
$persona->saludar();  // ¡Hola, mi nombre es Carlos!
