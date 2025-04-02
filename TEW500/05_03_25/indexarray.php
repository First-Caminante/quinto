<?php

include_once 'libarray.php'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar matriz</title>
</head>
<body>

<h1>EL PRIMERO:</h1>
<table border="3em">
    <?php 
        foreach(matriz(4,5,0,15) as $fila){
    ?>
        <tr>
    <?php 
        foreach($fila as $col){
    ?> 

    <td><?=$col?></td>

    <?php
        }
    ?>
        </tr>
    <?php
        }
    ?>
</table>
    
</body>
</html>