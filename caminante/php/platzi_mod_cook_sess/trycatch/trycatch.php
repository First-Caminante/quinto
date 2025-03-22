<?php


try {

  $resultado = 20 / 0;


  echo $resultado;
} catch (Throwable $e) {
  echo "el error es: " . $e->getMessage();
}

echo "<br>esto pasa si o si por que estoy bypaseando <br> aun que no quieras";
