<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/Ejercicio4.css">
</head>
<body>
    <menu>
        <a href="index.php">INICIO</a>
        <div>
            <a href="ejercicio1.php">Ejercicio1</a>
            <a href="ejercicio2.php">Ejercicio2</a>
            <a href="ejercicio3.php">Ejercicio3</a>
            <a href="ejercicio4.php">Ejercicio4</a>
            <a href="ejercicio5.php">Ejercicio5</a>
            <a href="ejercicio6.php">Ejercicio6</a>
            <a href="ejercicio7.php">Ejercicio7</a>
        </div>
    </menu>
    <h1 class="titulo">Mostrar el factorial de un numero</h1>
    <form method="post">
        <label for="numero">Ingrese un numero</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" class="boton">
    </form>
</body>
</html>

<?php
    $resultado=1;
    $numero = $_POST['numero'] ?? null;

    if ($numero == null){
        echo ("<h1 class='info def'>Ingrese un numero</h1>");
    }else{
        for ($i=1; $i <=$numero; $i++){
            $resultado=$resultado*$i;
        }
        echo("<h1 class='correcto def'>el factorial de $numero = $resultado</h1>");
    }
    
?>