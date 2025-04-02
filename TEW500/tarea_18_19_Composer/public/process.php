<?php

require("../vendor/autoload.php");

use App\Controllers\Functions;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $funciones = new Functions();

  $action = isset($_POST['action']) ? $_POST['action'] : '';

  switch ($action) {
    case 'addLibro':

      $data = [
        ":titulo" => /*$_POST['titulo'],*/ filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS),
        ":isbn" => $_POST['isbn'],
        ":editorial" => $_POST['editorial'],
        ":paginas" => $_POST['paginas']
      ];
      $idlibro = $funciones->addLibro($data);

      $idautor = isset($_POST['Autor']) ?? '';

      //dd($idautor);

      if ($idautor != false) {

        $datalibro = [
          ":idAutor" => $_POST['Autor'],
          ":idLibro" => $idlibro
        ];

        $funciones->addautorlibro($datalibro);
      }

      header('location:/EISPDM/TEW500/tarea_18_19_Composer/public/libros.php');
      #                 TEW500/tarea_18_19_Composer/public/libros.php
      break;
    case 'editLibro':

      //dd($_POST);

      $idautor = isset($_POST['Autor']) ?? '';
      // dd($idautor);
      if ($_POST['idLibro'] != null && $idautor != null) {

        $data = [
          ":idLibro" => $_POST['idLibro'],
          ":titulo" => $_POST['titulo'],
          ":isbn" => $_POST['isbn'],
          ":editorial" => $_POST['editorial'],
          ":paginas" => $_POST['paginas']
        ];
        $dataAutor = [
          ":idLibro" => $_POST['idLibro'],
          ":idAutor" => $_POST['Autor']
        ];
        $funciones->updateLibro($data);
        $funciones->updateLibroAutor($dataAutor);
      } else {
        echo "error hija los datos no se enviarion...";
      }
      header('location:/EISPDM/TEW500/tarea_18_19_Composer/public/libros.php');

      break;
    case 'addAutor':
      $data = [
        ":nombre" => filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS),
        ":apePaterno" => filter_input(INPUT_POST, 'apePaterno', FILTER_SANITIZE_SPECIAL_CHARS),
        ":apeMaterno" => filter_input(INPUT_POST, 'apeMaterno', FILTER_SANITIZE_SPECIAL_CHARS)
      ];

      $funciones->addAutor($data);

      header('location:/EISPDM/TEW500/tarea_18_19_Composer/public/libros.php');
      break;
  }
} else if ($_SERVER['REQUEST_METHOD'] == "GET") {
  $funciones = new Functions();

  $data = [
    ":idLibro" => $_GET['idLibro']
  ];

  //dd($data);

  $funciones->deleteLibroAutor($data);
  $funciones->deleteLibro($data);
  header('location:/EISPDM/TEW500/tarea_18_19_Composer/public/libros.php');
}
