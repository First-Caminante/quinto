<?php

function matriz($fila, $col, $min,$max){
    for($i = 0; $i<$fila; $i++){
        for($j = 0; $j<$col; $j++){
                $mat[$i][$j] = rand($min,$max);
        }           
    }

    return $mat;
}


function matrizn($fila, $col, $min,$max,$n){
    for($i = 0; $i<$fila; $i++){
        for($j = 0; $j<$col; $j++){
                $mat[$i][$j] = $n * rand($min,$max);
        }           
    }
    return $mat;
}

//var_dump(matriz(4,5,0,15));

?>