<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/Ejercicio5.css">
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
    <h1 class="titulo">Decir si un numero es positivo o negativo</h1>
    <form method="post">
        <label for="input">Ingrese un numero</label>
        <input type="number" placeholder="Ingrese un numero" id="input" name="input">
        <input type="submit" value="verificar" class="boton">
    </form>
</body>
</html>

<?php
    $input = $_POST['input'] ?? null;
    if ($input <  0){
        echo "<h1 class='def negativo'>el numero es negativo</h1>";
    } elseif ($input > 0){
        echo "<h1 class='def positivo'>El numero es positivo</h1>";
    } elseif ($input == null){
        echo "<h1 class='def info'>Ingrese un numero</h1>";
    }else{
        echo "<h1 class='def cero'>El numero es cero</h1>";
    }

?>