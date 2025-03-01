<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA_1</title>
</head>
<body>
    <h1>CAPICUAS O NO??</h1>

    <!-- PRIMER FORMULARIO: Cantidad de dígitos -->
    <h3>Dado 3 números enteros, determinar y visualizar la cantidad de dígitos PARES Y SI SON CAPICUAS XD</h3>
    <form action="recibir_capicua.php" method="post">
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

    

    

</body>
</html>