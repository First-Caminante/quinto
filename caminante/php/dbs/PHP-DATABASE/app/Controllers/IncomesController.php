<?php

namespace App\Controllers;

use Database\PDO\Connection;

class IncomesController
{

  private $connection;

  public function __construct()
  {
    $this->connection = Connection::getInstance()->getConnection();
  }


  public function index()
  {
    $stmt = $this->connection->prepare("select * from incomes;");
    $stmt->execute();
    //$results = $stmt->fetchAll(); 
    // y si lo hacemos con fetch asi como trampa solo de jueguito we 

    while ($row = $stmt->fetch()) {
      echo "gastaste " . $row['amount'] . " en " . $row['description'] . "\n";
    }
  }
  public function create() {}
  public function store($data)
  {
    #
    #ESTA ES LA MANERA EN LA QUE USAS EL METODO QUERY DE UNA VEZ PERO ES VULNERABLE A 
    #ATAQUES DE SQL INYECTION ASI QUE NO LO HAGAS JAMAS CAMINANTE...MEJOR USA PREPARE
    #
    /*$connection = Connection::getInstance()->getConnection();*/
    /*$connection->query("INSERT into incomes (payment_method,type,date,amount,description) values(  */
    /*{$data['payment_method']},*/
    /*{$data['type']},*/
    /*'{$data['date']}',*/
    /*{$data['amount']},*/
    /*'{$data['description']}'*/
    /*);");*/

    #
    #AHORA USAREMOS PREPARE PARA HACER LA CONSULTA Y NO TENER MALAS PRACTICAS Y ASI LOGRAR
    #HACER UN TRABAJO DE CALIDAD
    #

    /*$connection = Connection::getInstance()->getConnection();*/
    /*$stmt = $connection->prepare("INSERT INTO incomes (payment_method,type,date,amount,description)*/
    /*values (?,?,?,?,?);");*/
    /**/
    /*$payment_method = $data['payment_method'];*/
    /*$type = $data['type'];*/
    /*$date = $data['date'];*/
    /*$amount = $data['amount'];*/
    /*$description = $data['description'];*/
    /**/
    /**/
    /*$stmt->bind_param("iisds", $payment_method, $type, $date, $amount, $description);*/
    /**/
    /*$stmt->execute();*/
    /**/
    /*echo "se han insertado {$stmt->affected_rows} en la tabla incomes...<br>";*/

    ###ahora con pdo nosotros nosotros  

    $stmt = $this->connection->prepare("INSERT INTO incomes (payment_method,type,date,amount,description) values(:payment_method,:type,:date,:amount,:description);");

    $affected_rows = $stmt->execute($data);

    echo "se afectaron $affected_rows...";
  }
  public function show() {}
  public function edit() {}
  public function update() {}
  public function destroy() {}
}
