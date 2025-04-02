<?php
class Facebook{  

// atributos
public $nombre;
public $edad;
//atrinuto de tipo privado
private $pass;

public function __construct($nombre,$edad,$pass){ 
$this->nombre = $nombre;
$this->edad = $edad;
$this->pass =$pass;


}
public function verinformacion(){
  echo"nombre: ".$this->nombre."<br>";
  echo "edad: ".$this->edad."<br>";

  $this->cambiarpass("54321");
  echo"pass :".$this->pass."<br>";

}

private function cambiarpass($pass){
  $this->pass = $pass;
}




}

$facebook = new Facebook("juan chambi",1000,"12345");
$facebook->verinformacion();
?>










