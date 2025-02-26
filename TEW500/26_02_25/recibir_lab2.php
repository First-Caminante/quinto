<?php
#
#
#DECLARACION DE FUNCIONES:

function serie_n($n,$x,$y){
    $contx = $x;
    // $conty = $y;
    //for($i = 0; $i<=$n; $i++){
      //  if()
    //}
        while ($n > 0){
            if($contx > 0){
                echo $x.",";
                $contx--;
                $n--;
                if($contx == 1){
                    $conty = $y +1;
                }
            }else if($conty > 0){
                echo $y.",";
                $conty--;
                $n--;
                if($conty == 1){
                    $contx = $x;
                }
            }
        }

}


function serie_2($n){
    $sum = 1;
    $digsum = 2;
    $contsum = $digsum;

    while($n>0){
        
        echo $sum.",";

        $sum += $digsum;

        $contsum--;

        $n--;
        
        if($contsum == 0){
            $contsum = $digsum + 1;
            $digsum++;
        }
    }
}


function serie_3($n,$r){

    $contx = 4;

    while($n > 0){

        if($contx > 0){
            echo "1";
            $contx--;
            $n--;
            if($contx == 1){
                $conty = 5;
            }
        }else if($conty > 0){
            echo "0";
            $conty--;
            $n--;
            if($conty == 1){
                $contx = 4;
            }
        }

        
    }
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Determinar la cantidad de dígitos de tres números
    if (isset($_POST["btn_serie"])) {
        $n = abs($_POST["n"]);
        $x = abs($_POST["x"]);
        $y = abs($_POST["y"]);
        serie_n($n,$x,$y);
        
    }

    if (isset($_POST["btn_serie2"])) {
        $n = abs($_POST["n"]);
        
        serie_2($n);
        
    }


    if (isset($_POST["btn_serie3"])) {
        $n = abs($_POST["n"]);
        $r = abs($_POST["r"]);
        
        serie_3($n,$r);
        
    }
    
} else {
    echo "<h3>Acceso denegado</h3>";
}
?>