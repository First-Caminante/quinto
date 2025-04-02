<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>

  <?php if (isset($_SESSION["id"])): ?>

    <h1>hola <?= $_SESSION["username"] ?></h1>

  <?php else:  ?>

    <h1>NO HAS INICIADO SESSION</h1>


  <?php endif; ?>

</body>

</html>
