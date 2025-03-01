<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA_1</title>
</head>
<body>
    <h1>LABORATORIO_2</h1>

    <!-- PRIMER FORMULARIO: Cantidad de dígitos -->
    <h3>SERIE N</h3>
    <form action="recibir_lab2.php" method="post">
        <label>
            Digite valores n,x,y:
            Digite n:<input type="number" name="n" required>
            Digite x:<input type="number" name="x" required>
            Digite y:<input type="number" name="y" required>
        </label>
        <br><br>
        <input type="submit" name="btn_serie" value="Enviar">
    </form>

    <hr>


    <h3>SERIE 2</h3>
    <form action="recibir_lab2.php" method="post">
        <label>
            Digite valor n:
            Digite n:<input type="number" name="n" required>
        </label>
        <br><br>
        <input type="submit" name="btn_serie2" value="Enviar">
    </form>


    <h3>SERIE 3</h3>                                    
    <form action="recibir_lab2.php" method="post">
        <label>
            Digite valor n:
            Digite n:<input type="number" name="n" required>
            Digite r:<input type="number" name="r" required>
        </label>
        <br><br>
        <input type="submit" name="btn_serie3" value="Enviar">
    </form>
    

</body>
</html>