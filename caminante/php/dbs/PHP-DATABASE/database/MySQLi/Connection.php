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
  public function getConnection()
  {
    return $this->connection;
  }

  private function conexiondb()
  {
    $server = "localhost";
    $database = "finanzas_personales";
    $username = "root";
    $password = "caminante";


    $mysqli = new \mysqli($server, $username, $password, $database);

    return $mysqli;
  }


  private function makeConnection()
  {
    $mysqli = $this->conexiondb();

    if ($mysqli->connect_errno) {
      die("fallo la conexion orientada a objetos" . $mysqli->connect_error);
    }

    $this->connection = $mysqli;
  }
}
