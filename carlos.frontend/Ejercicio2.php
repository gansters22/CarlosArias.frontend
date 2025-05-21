<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/Ejercicio2.css">
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
    <h1 class="titulo">Calculadora</h1>
    <form method="post">
        <label for="numero_uno">Numero 1</label>
        <input type="number" name="numero_uno" id="numero_uno">
        <label for="numero_dos">Numero 2</label>
        <input type="number" name="numero_dos" id="numero_dos">
        <div>
            <input type="submit" value="Sumar" name="sumar" class="sumar">
            <input type="submit" value="Restar" name="restar" class="restar">
            <input type="submit" value="Multiplicar" name="multiplicar" class="multiplicar">
            <input type="submit" value="Dividir" name="dividir" class="dividir">
            <input type="submit" value="Limpiar" name="limpiar" class="limpiar">
        </div>
    </form>
    
</body>
</html>

<?php
    $numerouno = $_POST['numero_uno'] ?? null;
    $numerodos = $_POST['numero_dos'] ?? null;

    $sumar = $_POST['sumar'] ?? null;
    $restar = $_POST['restar'] ?? null;
    $multiplicar = $_POST['multiplicar'] ?? null;
    $dividir = $_POST['dividir'] ?? null;
    $limpiar = $_POST['limpiar'] ?? null;

    if (($numerouno == null) && ($numerodos == null)){
        echo("<h1 class='info'>Los dos campos deben contener al menos un numero</h1>");
    }else{
        if (isset($sumar)){
            $resultado = $numerouno + $numerodos;
            echo("<h1 class='resultado'>La suma entre $numerouno y $numerodos es igual a $resultado </h1>");

        } elseif (isset($restar)){
            $resultado = $numerouno - $numerodos;
            echo("<h1 class='resultado'>La resta entre $numerouno y $numerodos es igual a $resultado </h1>");

        }elseif (isset($multiplicar)){
            $resultado = $numerouno * $numerodos;
            echo("<h1 class='resultado'>La multiplicacion entre $numerouno y $numerodos es igual a $resultado </h1>");

        }elseif (isset($dividir)){
            $resultado = $numerouno / $numerodos;
            echo("<h1 class='resultado'>La division entre $numerouno y $numerodos es igual a $resultado </h1>");

        }elseif (isset($limpiar)){
            $numerouno = null;
            $numerodos = null;
        }
    }
    
    


?>