<?php 

include_once 'templates/header.php';
include_once 'templates/footer.php';
include_once 'function/funciones.php';
?>

<div class="container mb-5 mt-5">

<div class = "row">
  <div class="col-sm-12 text-center mt-3">
    <h1>LISTADO DE LIBROS</h1>
  </div>
</div>

<div class="row">

  <?php 
    foreach (libro($con) as $key => $value){?>
  <div class="col-sm-6  col-md-4 mb-4">
    <div class="card" style="with : 18rem;">

    
      <img src="img.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$value['titulo']?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
    <?php } ?>
</div>
</div>


