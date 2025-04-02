<?php
    include_once 'libarray.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // Determinar la cantidad de dígitos de tres números
        if (isset($_POST["btn_uno"])) {
            $fil = 1;
            $col = abs($_POST["col"]);
            $min = abs($_POST["min"]);
            $max = abs($_POST["max"]); 
        }
    
        if (isset($_POST["btn_dos"])) {
            $fil = abs($_POST["fil"]);
            $col = abs($_POST["col"]);
            $n = abs($_POST["n"]);
            
        }
    
    
        if (isset($_POST["btn_tres"])) {
            $fil = abs($_POST["fil"]);
            $col = abs($_POST["col"]);
            $min = abs($_POST["min"]);
            $max = abs($_POST["max"]); 
            
        }


        if (isset($_POST["btn_cuatro"])) {
            $fil = abs($_POST["fil"]);
            $col = abs($_POST["col"]);
            $min = abs($_POST["min"]);
            $max = abs($_POST["max"]); 
        }
        
    } else {
        echo "<h3>Acceso denegado</h3>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST["btn_uno"])){
?>


<h1>1 MOSTRAR MATRIZ ALEATORIA</h1>
<table border="3em">
    <?php 
        foreach(matriz($fil,$col,$min,$max) as $fila){
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


<?php

}

?>








///////




<?php

if(isset($_POST["btn_dos"])){
?>


<h1>1 MOSTRAR MATRIZ ALEATORIA con multiplos n</h1>
<table border="3em">
    <?php 
        foreach(matrizn($fil,$col,1,10,$n) as $fila){
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


<?php

}

?>


///////////////////////////





<?php

if(isset($_POST["btn_tres"])){
?>


<h1>DIAGONAL PRINCIPAL</h1>
<table border="3em">
    <?php 
        $mat = matriz($fil,$col,$max,$min);
        for($i = 0; $i < $fil; $i++){
    ?>
        <tr>
    <?php 
        for($j = 0; $j < $col; $j++){
    ?> 

    <td>
    <?php if($i == $j){?>

    <?=$mat[$i][$j];?>

    <?php }?>    

    </td>

    <?php
        }
    ?>
        </tr>
    <?php
        }
    ?>
</table>


<?php

}

?>


/////////////////////////////////////////////////////////////////////////////////






<?php

if(isset($_POST["btn_cuatro"])){
?>


<h1>DIAGONAL secundaria</h1>
<table border="3em">
    <?php 
        $mat = matriz($fil,$col,$max,$min);
        for($i = 0; $i < $fil; $i++){
    ?>
        <tr>
    <?php 
        for($j = 0; $j < $col; $j++){
    ?> 

    <td>
    <?php if(($i + $j) == $fil-1){?>

    <?=$mat[$i][$j];?>

    <?php }?>    

    </td>

    <?php
        }
    ?>
        </tr>
    <?php
        }
    ?>
</table>


<?php

}

?>


    
</body>
</html>