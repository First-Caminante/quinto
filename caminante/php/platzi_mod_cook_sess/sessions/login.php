<?php

session_start();

$users = [

  array(
    "username" => "caminante",
    "email" => "i.am.caminante@gmail.com"
  ),
  array(
    "username" => "caminante2",
    "email" => "i.am.caminante2@gmail.com"
  )


];


$user = $_GET['user'] ?? "";

//echo "el usuario elegido es: " . $users[$user]["username"] . "<br>";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
