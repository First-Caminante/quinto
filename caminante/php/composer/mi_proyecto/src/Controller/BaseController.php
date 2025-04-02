<?php

namespace App\Controller;

abstract class BaseController
{
  public function jsonResponse(array $data)
  {
    header('Content-Type: application/json');
    echo json_encode($data);
  }
}
