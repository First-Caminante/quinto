<?php

namespace Database\MySQLi;

#lo ideal es que este en un archivo dot.env 
#
#asi que preguntale al gpt
class Connection
{


  private $connection;
  private function __construct()
  {
    $this->makeConnection();
  }

  private static $instance;
  public static function getInstance()
  {
    if (!self::$instance instanceof self) {
      self::$instance =  new self();
    }

    return self::$instance;
  }

  private function makeConnection()
  {

    $server = "localhost";
    $database = "finanzas_personales";
    $username = "root";
    $password = "caminante";

    //forma procedural

    #$mysqli = mysqli_connect($server, $username, $password, $database);
    #

    // forma orientada a objetos

    $mysqli =  new \mysqli($server, $username, $password, $database);

    ///comprobar conexion procedural 
    //


    /*if (!$mysqli) {*/
    /*  die("fallo la conexion procedural" . mysqli_connect_error());*/
    /*}*/

    //comprobar conexion orientada a objetos 

    if ($mysqli->connect_errno) {
      die("fallo la conexion orientada a objetos" . $mysqli->connect_error);
    }

    #$setnames  = $mysqli->prepare("SET NAMES 'utf8'");
    $setnames  = $mysqli->prepare("show tables;");

    $setnames->execute();

    $this->connection = $mysqli;

    var_dump($setnames);
  }

  public function getConnection()
  {
    return $this->connection;
  }
}
