<?php
include_once '../db/conexion.php';

$conexion = new Conexion;
$con = $conexion->conectar();
var_dump($con);



function libro($connect){

    $sql = $connect->query('select * from libro l inner join autorlibro al ON l
    .idLibro=al.idLibro INNER JOIN autor a ON al.idAutor=a.idAutor');

    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    
    return $resultado;

}


function autor($connect){
    $sql = $connect->query('select * from autor order by apePaterno');

    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    var_dump($resultado);
    
    return $resultado;
}

function addLibro($connect){

    if($_SERVER['REQUEST_METHOD'] == "POST"){
         $titulo = $_POST['txtTitulo'];
    $isbn =$_POST['txtISBN'];
    $editorial = $_POST['txtEditorial'];
    $numpag = $_POST['numPaginas'];
    $idautor = $_POST['txtAutor'];
    }

   

    //$sql = $connect->query('');

    print_r($_POST);

    //$sql->execute();



}

addLibro($con);




?>