<?php
error_reporting(E_ALL);      // Reportar todos los errores
ini_set('display_errors', 1); // Mostrar errores en pantalla
ini_set('display_startup_errors', 1); // Mostrar errores que ocurren al iniciar PHP


include_once 'Templates/header.php';
include_once 'Templates/footer.php';

require("../vendor/autoload.php");

use App\Controllers\Functions;

$funciones = new Functions();

?>

<div class="container mt-5 mb-5">

  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          LISTA DE LIBROS
        </div>
        <div class="p-4">
          <table class="table">
            <thead>
              <tr>
                <th>TITULO</th>
                <th>ISBN</th>
                <th>AUTOR</th>
                <th>EDITORIAL</th>
                <th colspan="2">OPERACIONES</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($funciones->libro() as $key => $value) { ?>
                <tr>
                  <th><?= $value['titulo'] ?></th>
                  <th><?= $value['isbn'] ?></th>
                  <th><?= $value['apePaterno'] . " " . $value['apeMaterno'] ?></th>
                  <th><?= $value['editorial'] ?></th>
                  <th><a href="#"><button type="button" class="btn btn-outline-success btn-sm">editar</button></a></th>
                  <th><a href="#"><button type="button" class="btn btn-outline-danger btn-sm">eliminar</button></a></th>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-center">
          <h3>Adicionar libro</h3>
        </div>
        <form action="function/funciones.php" method="POST">
          <div class="m-2">
            <label for="" class="form-label">TITULO
              <input type="text" class="form-control" name="txtTitulo" autofocus>
            </label>
          </div>
          <div class="m-2">
            <label for="" class="form-label">ISB
              <input type="text" class="form-control" name="txtISBN" autofocus>
            </label>
          </div>
          <div class="m-2">
            <label for="" class="form-label">EDITORIAL
              <input type="text" class="form-control" name="txtEditorial" autofocus>
            </label>
          </div>
          <div class="m-2">
            <label for="" class="form-label">NUM PAG
              <input type="number" class="form-control" name="numPaginas" autofocus>
            </label>
          </div>
      </div>
      <div class="m-2">
        <label for="" class="form-label">seleccionar autor
          <select name="txtAutor" id="idAutor">
            <?php foreach ($funciones->autor() as $key => $value) { ?>
              <option value="<?$value['idAutor']?>"><?= $value['apePaterno'] . " " . $value['apeMaterno'] . " " . $value['nombre'] ?></option>
            <?php } ?>
          </select>
        </label>
      </div>
      <div class="d-grid">
        <input type="submit" class="btn btn-primary" value="registrar">
      </div>
      </form>
    </div>
  </div>
</div>
</div>
