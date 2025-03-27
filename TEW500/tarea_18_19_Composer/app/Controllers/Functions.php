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

      $stmt = $this->con->prepare("insert into libro (titulo,isbn,editorial,paginas) 
      values(:titulo,:isbn,:editorial,:paginas);");

      $stmt->execute($data);

      return $this->con->lastInsertId();
      

    } catch (\PDOException $e) {
      echo "error al insertar datos en libro: " . $e->getPrevious();
      die();
    }
  }

  function addautorlibro($data){
    try{
      
      $stmt = $this->con->prepare("insert into autorLibro (idAutor,idLibro) 
      values(:idAutor,:idLibro);");

      $stmt->execute($data);

    }catch(\PDOException $e){
      echo "error al insertar autor libro..." . $e->getMessage();
    }
  }

  function deleteAutorLibro($id){
    try{

    }catch(\PDOException $e){
      echo "error al insertar autor libro..." . $e->getMessage();
    }
  }

  function updateLibro($data){
    try{
      $stmt = $this->con->prepare("update libro set titulo=:titulo, isbn = :isbn,editorial = :editorial, paginas = :paginas WHERE idLibro=:idLibro;");
      $stmt->execute($data);
    }catch(\PDOException $e){
      echo "error al insertar autor libro..." . $e->getMessage();
    }
  }
  function updateLibroAutor($data){
    try{
      //dd($data);
      $stmt = $this->con->prepare("update autorLibro set idAutor = :idAutor WHERE idLibro = :idLibro;");
      $stmt->execute($data);
    }catch(\PDOException $e){
      echo "error al ACTUALIZAR autor libro..." . $e->getMessage();
    }
  }

  function deleteLibroAutor($data){
    try{
      //dd($data);
      $stmt = $this->con->prepare("DELETE FROM autorLibro WHERE idLibro = :idLibro");
      $stmt->execute($data);
    }catch(\PDOException $e){
      echo "error al ELIMINAR LIBROAUTOR..." . $e->getMessage();
    }
  }

  function deleteLibro($data){
    try{
      //dd($data);
      $stmt = $this->con->prepare("DELETE FROM libro WHERE idLibro = :idLibro");
      $stmt->execute($data);
    }catch(\PDOException $e){
      echo "error al ELIMINAR LIBRO..." . $e->getMessage();
    }
  }
}
