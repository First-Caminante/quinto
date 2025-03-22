<?php


$server = "localhost";
$database = "finanzas_personales";
$username = "root";
$password = "caminante";

$connection =  new PDO("mysql:host=$server;dbname=$database", $username, $password);

#$setnames  = $mysqli->prepare("SET NAMES 'utf8'");
$setnames  = $connection->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);
