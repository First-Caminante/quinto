<?php
error_reporting(E_ALL);      // Reportar todos los errores
ini_set('display_errors', 1); // Mostrar errores en pantalla
ini_set('display_startup_errors', 1); // Mostrar errores que ocurren al iniciar PHP


include_once 'Templates/header.php';
require("../vendor/autoload.php");

use App\Controllers\Functions;

$funciones = new Functions();

?>

<div class="container mb-5 mt-5">

  <div class="row">
    <div class="col-sm-12 text-center mt-3">
      <h1>LISTADO DE LIBROS</h1>
    </div>
  </div>

  <div class="row">

    <?php
    foreach ($funciones->libro() as $key => $value) { ?>
      <div class="col-sm-6  col-md-4 mb-4">
        <div class="card" style="width : 18rem;">


          <img src="img.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $value['titulo'] ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
