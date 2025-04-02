<!DOCTYPE html>
<html>

<head>
  <title>Lista de Usuarios</title>
</head>

<body>
  <h1>Lista de Usuarios Registrados</h1>
  <?php if (empty($usuarios)): ?>
    <p>No hay usuarios registrados.</p>
  <?php else: ?>
    <ul>
      <?php foreach ($usuarios as $usuario): ?>
        <li><?= $usuario['nombre'] ?> - <?= $usuario['email'] ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <br>
  <a href="/index.php">Volver al registro</a>
</body>

</html>
