<?php


include_once 'Templates/header.php';
include_once 'Templates/footer.php';



?>
<div class="container">
  <form action="process.php" method="POST">
    Nombre
    <input class="form-control form-control-sm" type="text" name="nombre" placeholder="NOMBRE" aria-label=".form-control-sm example">
    Apellido Paterno
    <input class="form-control form-control-sm" type="text" name="apePaterno" placeholder="APELLIDO PATERNO" aria-label=".form-control-sm example">
    Apellido Materno
    <input class="form-control form-control-sm" type="text" name="apeMaterno" placeholder="APELLIDO MATERNO" aria-label=".form-control-sm example">

    <input type="hidden" name="action" value="addAutor">

    <br>

    <button type="submit" class="btn btn-success" value="registrarAutor">Registrar Autor</button>

  </form>
</div>
