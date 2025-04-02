<?php

if (!isset($_COOKIE["ejemplo"])) {
  setcookie(
    name: "ejemplo",
    value: "yuxituxi",
    expires_or_options: 0,
    path: "/",
    domain: "localhost",
    secure: false,
    httponly: true
  );
  echo "cookie creada!!!<br>";
}


echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
