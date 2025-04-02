<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalController
{

  private $connection;

  public function __construct()
  {
    $this->connection = Connection::getInstance()->getConnection();
  }

  public function index()
  {

    /*$stmt =  $this->connection->prepare("select * from withdrawals;");*/
    /*$stmt->execute();*/
    /**/
    /*$results = $stmt->fetchAll();*/
    /*foreach ($results as $result) {*/
    /*  echo "gastaste " . $result['amount'] . " y " . $result['description'] . "\n";*/
    /*}*/

    #ahora usaremos a fetch column

    $stmt =  $this->connection->prepare("select amount, description from withdrawals;");
    $stmt->execute();

    $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);

    /*foreach ($results as $result) {*/
    /*  echo "gastaste " . $result;*/
    /*}*/
    var_dump($results);
  }
  public function create() {}
  public function store($data)
  {
    #lo malo de esto es que nos puede causar sqlinyection y cagamos
    #

    /*$connection = Connection::getInstance()->getConnection();*/
    /**/
    /*$affected_rows = $connection->exec("INSERT INTO withdrawals(payment_method,type,date,amount,description) */
    /*values(*/
    /*{$data['payment_method']}, */
    /*{$data['type']}, */
    /*'{$data['date']}', */
    /*{$data['amount']}, */
    /*'{$data['description']}'*/
    /*);*/
    /*");*/
    /*echo "se ha insetado $affected_rows fila en withdrawals...";*/

    #pero ahora si que lo evitaremos affected_rows



    $stmt = $this->connection->prepare("INSERT INTO withdrawals(payment_method,type,date,amount,description) 
    values(:payment_method,:type,:date,:amount,:description);
    ");
    $stmt->execute($data);
    //echo "se ha insetado $affected_rows fila en withdrawals...";
  }
  public function show(int $id)
  {
    $stmt = $this->connection->prepare("select * from withdrawals where id=:id;");

    $stmt->execute([
      ":id" => $id
    ]);
    $results = $stmt->fetch();

    echo "Te gastaste " . $results['amount'] . " en " . $results['description'] . " en la fecha :"
      . $results['date'];
  }
  public function edit() {}
  public function update() {}
  public function destroy() {}
}
