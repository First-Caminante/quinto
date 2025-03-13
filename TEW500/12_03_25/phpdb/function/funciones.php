<?php
include_once '../db/conexion.php';

$conexion = new Conexion;
$con = $conexion->conectar();
var_dump($con);


function libro($connect){
    $sql = $connect->query("select * from libro inner 1 join")
}

?>