<?php

use PharIo\Manifest\Extension;

try {

  $pet = readline("que mascota quieres adoptar: ");
  if ($pet != "tuxi" && $pet != "luis")
    throw new Exception("lo sentimos solo yuxis o luisas...");

  echo "felicidades por tu nuevo $pet";
} catch (Throwable $e) {
  echo $e->getMessage();
}
