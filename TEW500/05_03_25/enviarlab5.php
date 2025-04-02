<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA_1</title>
</head>
<body>
    <h1>LABORATORIO_5</h1>

    <!-- PRIMER FORMULARIO: Cantidad de dígitos -->
    <h3>MOSTRAR UN VECTOR GENERADO CON NUMEROS ALEATORIOS</h3>
    <form action="recibirlab5.php" method="post">
        <label>
            Digite valores fil,col,min,max:
            
            Digite n:<input type="number" name="col" required>
            Digite MIN:<input type="number" name="min" required>
            Digite MAX:<input type="number" name="max" required>
        </label>
        <br><br>
        <input type="submit" name="btn_uno" value="Enviar">
    </form>

    <hr>


    <h3>Llenar una matriz aleatoria con multiplos de n</h3>
    <form action="recibirlab5.php" method="post">
        <label>
            Digite valores fil,col,nmultiplo:
            Digite FILAS:<input type="number" name="fil" required>
            Digite COLUMNAS:<input type="number" name="col" required>
            Digite multiplo n:<input type="number" name="n" required>
        </label>
        <br><br>
        <input type="submit" name="btn_dos" value="Enviar">
    </form>

    <hr>

    <h3>DIAGONAL PRINCIPAL</h3>                                    
    <form action="recibirlab5.php" method="post">
        <label>
            Digite valores fil,col,min,max:
            Digite FILAS:<input type="number" name="fil" required>
            Digite COLUMNAS:<input type="number" name="col" required>
            Digite MIN:<input type="number" name="min" required>
            Digite MAX:<input type="number" name="max" required>
        </label>
        <br><br>
        <input type="submit" name="btn_tres" value="Enviar">
    </form>
    

    <hr>

    <h3>DIAGONAL sec</h3>                                    
    <form action="recibirlab5.php" method="post">
        <label>
            Digite valores fil,col,min,max:
            Digite FILAS:<input type="number" name="fil" required>
            Digite COLUMNAS:<input type="number" name="col" required>
            Digite MIN:<input type="number" name="min" required>
            Digite MAX:<input type="number" name="max" required>
        </label>
        <br><br>
        <input type="submit" name="btn_cuatro" value="Enviar">
    </form>

</body>
</html>