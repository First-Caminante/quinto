<?php

namespace Database\PDO;

class Connection
{

  private static $incomes;
  private $connection;

  private function __construct()
  {
    $this->makeConnection();
  }

  public static function getInstance()
  {
    if (!self::$incomes instanceof self) {
      self::$incomes = new self();
    }
    return self::$incomes;
  }

  public function getConnection()
  {
    return $this->connection;
  }

  private function makeConnection()
  {
    $connection = $this->connectPDO();
    #$setnames  = $mysqli->prepare("SET NAMES 'utf8'");
    /*$setnames  = $connection->prepare("SET NAMES 'utf8'");*/
    /*$setnames->execute();*/
    /**/

    /*var_dump($setnames);*/

    $this->connection = $connection;
  }

  private function connectPDO()
  {

    $server = "localhost";
    $database = "finanzas_personales";
    $username = "root";
    $password = "caminante";

    $connection =  new \PDO("mysql:host=$server;dbname=$database", $username, $password);

    return $connection;
  }
}
