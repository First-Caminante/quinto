<?php

setcookie(
  name: "header_color",
  value: "#12373d",
  path: "/",
  domain: "localhost"
);

$color = $_COOKIE['header_color'] ?? "#121f3d";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
    * {
      margin: 0;
      box-sizing: border-box;
      padding: 0;
    }

    header {
      display: flex;
      padding: 10px;
    }

    header img {
      width: 100px;
    }
  </style>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header
    style="background-color: <?= $color ?>;">
    <img src="logo.png">
  </header>
</body>

</html>
