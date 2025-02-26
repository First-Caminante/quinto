<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Determinar la cantidad de dígitos de tres números
    if (isset($_POST["btn_digitos"])) {
        $num1 = abs($_POST["num1"]);
        $num2 = abs($_POST["num2"]);
        $num3 = abs($_POST["num3"]);

        function contar_digitos($numero) {
            return strlen((string)$numero);
        }

        echo "<h3>Cantidad de dígitos:</h3>";
        echo "Número 1: $num1 → " . contar_digitos($num1) . " dígitos<br>";
        echo "Número 2: $num2 → " . contar_digitos($num2) . " dígitos<br>";
        echo "Número 3: $num3 → " . contar_digitos($num3) . " dígitos<br>";
    }
    

    // Verificar si los números son capicúa y contar los pares
    if (isset($_POST["btn_capicua"])) {
        $cantidad = $_POST["cantidad"];
        $pares = 0;
        $capicuas = [];

        echo "<h3>Ingrese $cantidad números mayores a 100:</h3>";
        for ($i = 0; $i < $cantidad; $i++) {
            $num = rand(101, 999); // Simulamos entrada aleatoria para prueba
            if ($num % 2 == 0) {
                $pares++;
            }
            if ($num == strrev($num)) {
                $capicuas[] = $num;
            }
            echo "Número ingresado: $num<br>";
        }

        echo "<h3>Resultados:</h3>";
        echo "Cantidad de números pares: $pares<br>";
        echo "Números capicúa encontrados: " . (empty($capicuas) ? "Ninguno" : implode(", ", $capicuas)) . "<br>";
    }

    // Mostrar el mes correspondiente
    if (isset($_POST["btn_mes"])) {
        $mes = $_POST["mes"];
        $meses = [
            1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 
            6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre",
            11 => "Noviembre", 12 => "Diciembre"
        ];

        echo "<h3>El mes correspondiente al número $mes es: " . $meses[$mes] . "</h3>";
    }

} else {
    echo "<h3>Acceso denegado</h3>";
}
?>