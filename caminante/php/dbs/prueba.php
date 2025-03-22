<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=juan', 'root', 'caminante');
  echo "¡Conexión exitosa con PDO!";
} catch (PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
