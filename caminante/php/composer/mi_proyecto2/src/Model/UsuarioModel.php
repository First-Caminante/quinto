<?php

namespace App\Model;

class UsuarioModel
{
  private $archivo = __DIR__ . '/usuario.txt';

  /*public function guardarUsuario(string $nombre, string $email): bool
  {
    $usuario = "$nombre | $email" . PHP_EOL;

    var_dump($this->archivo);


    if (!file_exists($this->archivo)) {
      die("❌ Error: El archivo '{$this->archivo}' no existe.");
    }



    return file_put_contents($this->archivo, $usuario, FILE_APPEND);
  }*/

  public function guardarUsuario(string $nombre, string $email): bool
  {
    $usuario = "$nombre | $email" . PHP_EOL;

    /*if (!file_exists($this->archivo)) {
      die("❌ Error: El archivo '{$this->archivo}' no existe.");
    }*/

    if (!is_writable($this->archivo)) {
      die("❌ Error: No tengo permisos de escritura en '{$this->archivo}'.");
    }

    /*if (!file_exists($this->archivo)) {
      touch($this->archivo);
      chmod($this->archivo, 0664);
    }*/


    $resultado = file_put_contents($this->archivo, $usuario, FILE_APPEND);

    if ($resultado === false) {
      die("❌ Error: Falló la escritura en el archivo.");
    }

    return true;
  }



  public function obtenerUsuarios(): array
  {
    if (!file_exists($this->archivo)) {
      return [];
    }

    $lineas = file($this->archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $usuarios = [];

    foreach ($lineas as $linea) {
      [$nombre, $email] = explode(' | ', $linea);
      $usuarios[] = ['nombre' => $nombre, 'email' => $email];
    }

    return $usuarios;
  }
}
