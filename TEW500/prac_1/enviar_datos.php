<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA_1</title>
</head>
<body>
    <h1>Practica_1</h1>

    <!-- PRIMER FORMULARIO: Cantidad de dígitos -->
    <h3>Dado 3 números enteros, determinar y visualizar la cantidad de dígitos</h3>
    <form action="recibir.php" method="post">
        <label>
            Digite 3 valores:
            <input type="number" name="num1" required>
            <input type="number" name="num2" required>
            <input type="number" name="num3" required>
        </label>
        <br><br>
        <input type="submit" name="btn_digitos" value="Enviar">
    </form>

    <hr>

    <!-- SEGUNDO FORMULARIO: Números capicúa y pares -->
    <h3>Dado un conjunto de n números enteros mayores a 100, determinar si son capicúa y contar los números pares.</h3>
    <form action="recibir.php" method="post">
        <h4>Digite el número de valores a ingresar</h4>
        <input type="number" name="cantidad" min="1" required>
        <br><br>
        <input type="submit" name="btn_capicua" value="Enviar">
    </form>

    <hr>

    <!-- TERCER FORMULARIO: Mes correspondiente -->
    <h3>Enviar un número del 1 al 12 y mostrar su equivalente en mes.</h3>
    <form action="recibir.php" method="post">
        <h4>Digite un número entre 1 y 12</h4>
        <input type="number" name="mes" min="1" max="12" required>
        <br><br>
        <input type="submit" name="btn_mes" value="Enviar">
    </form>

</body>
</html>