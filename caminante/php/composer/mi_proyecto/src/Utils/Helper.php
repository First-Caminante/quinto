<?php

namespace App\Utils;

class Helper
{
  public static function formatoMoneda($cantidad)
  {
    return '$' . number_format($cantidad, 2);
  }
}
