<?php
/*
class Conexion{

private $db ='mysql:host=localhost;dbname=biblioteca_php';
private $usuario = 'root';
private $password = '';

public function conectar(){
    try {

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        $pdo = new PDO($this->$db, $this->$usuario, $this->$password,$options);

        echo "conectado papulin";

        #foreach($mbd->query('SELECT * from FOO') as $fila) {
         #   print_r($fila);
        #}

        return $pdo;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

}

$conexion = new Conexion();

$con = $conexion->conectar();

var_dump($con);
*/



/*
    Clase conexion, establece la conexion al SGDB con el metodo PDO
*/
class Conexion 
{
    private $db='mysql:host=localhost;dbname=biblioteca_php';
    private $usuario = 'root';
    private $password = '';

    public function conectar(){
        try {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($this->db, $this->usuario, $this->password, $options);
            echo 'Conectado...';
            return $pdo;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
/*$conexion = new Conexion;
$con = $conexion->conectar();
var_dump($con);
*/




?>