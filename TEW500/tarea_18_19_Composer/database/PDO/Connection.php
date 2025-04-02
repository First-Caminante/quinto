<?php

namespace Database\PDO;

class Connection
{
  /* private $db = 'mysql:host=localhost;dbname=biblioteca_php';
  private $usuario = 'root';
  private $password = 'caminante';

  public function __construct() {}

  public function conectar()
  {
    try {
      $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_EMULATE_PREPARES => false,
      ];
      $pdo = new \PDO($this->db, $this->usuario, $this->password, $options);
      echo 'Conectado...';
      return $pdo;
    } catch (\PDOException $e) {
      print "¡Error!: " . $e->getMessage() . "<br/>";
      die();
    }
  }*/


  private static $instance;
  private $connection;

  private function __construct()
  {
    $this->makeConnection();
  }

  public static function getInstance()
  {
    if (!self::$instance instanceof self) {
      self::$instance =  new self;
    }
    return self::$instance;
  }

  public function getConnection()
  {
    return $this->connection;
  }

  private function makeConnection()
  {
    $this->connection = $this->conectarpdo();
  }

  private function conectarpdo()
  {
    $server = "localhost";
    $db = "biblioteca_php";
    $user = "root";
    $password = "caminante";

    try {
      $pdo = new \PDO("mysql:host=$server;dbname=$db", $user, $password, [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_EMULATE_PREPARES => false
      ]);
      return $pdo;
    } catch (\PDOException $e) {
      echo "error al conectar con la db: " . $e->getMessage();
      die();
    }
  }
}
