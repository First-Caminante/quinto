<?php

function num_pares($n){
    $cont = 0;

    while($n > 0){
        echo $n.",";
        $res = $n % 10; 
        
        if($res % 2 == 0){
            $cont++;
        }
        $n = $n / 10;
    }

    return $cont;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Determinar la cantidad de dígitos de tres números
    if (isset($_POST["btn_digitos"])) {

        $num1 = abs($_POST["num1"]);
        $num2 = abs($_POST["num2"]);
        $num3 = abs($_POST["num3"]);

        $val = [$num1,$num2,$num3];

        $pares = 0;
        $capicua = [];

        for ($i = 0; $i < 3; $i++) {
            
            $pares += num_pares($val[$i]);

            if ($val[$i] == strrev($val[$i])) {
                $capicuas[] = $val[$i];
            }
        }


        echo "<h3>Resultados:</h3>";
        echo "Cantidad de números pares: $pares<br>";
        echo "Números capicúa encontrados: " . (empty($capicuas) ? "Ninguno" : implode(", ", $capicuas)) . "<br>";



    }
    

    
} else {
    echo "<h3>Acceso denegado</h3>";
}
?>