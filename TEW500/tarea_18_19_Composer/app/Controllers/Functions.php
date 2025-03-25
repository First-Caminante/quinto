<?php

namespace App\Controllers;

use Database\PDO\Connection;

class Functions
{


  private $con;

  public function __construct()
  {
    $this->con = Connection::getInstance()->getConnection();
  }


  function libro()
  {

    $sql = $this->con->prepare('select * from libro l inner join autorLibro al ON l
    .idLibro=al.idLibro INNER JOIN autor a ON al.idAutor=a.idAutor');

    $sql->execute();

    $resultado = $sql->fetchAll(\PDO::FETCH_ASSOC);


    return $resultado;
  }





  function autor()
  {
    $sql = $this->con->prepare('select * from autor order by apePaterno');

    $sql->execute();

    $resultado = $sql->fetchAll(\PDO::FETCH_ASSOC);

    var_dump($resultado);

    return $resultado;
  }

  function addLibro($data)
  {

    try {

      $stms = $this->con->prepare("insert into libro (titulo,isbn,editorial,paginas) 
      values(:titulo,:isbn,:editorial,:paginas);");
    } catch (\PDOException $e) {
      echo "error al insertar datos en libro: " . $e->getPrevious();
      die();
    }
  }
}
