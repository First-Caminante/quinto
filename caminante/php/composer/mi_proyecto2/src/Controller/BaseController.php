<?php

namespace App\Controller;

abstract class BaseController
{
  public function renderView(string $view, array $data = [])
  {
    extract($data);
    require_once __DIR__ . "/../Views/{$view}.php";
  }
}
