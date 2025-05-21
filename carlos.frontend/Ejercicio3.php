<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/Ejercicio3.css">
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
    <h1 class="titulo">Verificar si es un palindromo</h1>
    <form method="post">
            <label for="texto">Ingrese la plabara</label>
            <input type="text" name="texto" class="texto" id="texto">
            <input type="submit" value="Verificar" class="boton">
        </form>
</body>
</html>

<?php
    $texto = $_POST['texto']?? null;
    if ($texto == null){
        echo ("<h1 class='info def'>Ingrese una palabra</h1>");
    }elseif ($texto == strrev($texto)){
        echo ("<h1 class='correcto def'>La palabra $texto es un palindromo</h1>");
    } else{
        echo ("<h1 class='incorrecto def'>La palabra $texto NO es un palindromo</h1>");
    }
?>