<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/Ejercicio1.css">
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

    <h1 class="titulo">Mostrar la tabla multiplicar de un numero</h1>
    <form method="post">
        <label for="numero">Ingrese el numero del que desea buscar la tabla</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Mostrar tabla" class="boton">
    </form>

    <table>
        <tr>
            <th>Numero</th>
            <th>Operacion</th>
            <th>Multiplicador</th>
            <th>Igualdad</th>
            <th>Resultado</th>
        </tr>
        <?php
            $numero = "";
            $numero = $_POST['numero'] ?? null;
            if ($numero == null){
                echo("<h1 class='info'>Para mostrar la tabla, primero debe ingresar un numero</h1>");
            }else{
                for ($i=0; $i<=10; $i++){   
                    $resultado = $i * $numero;
                    echo ("<tr> <th>$numero</th> <th>x</th> <th>$i</th> <th>=</th> <th>$resultado</th><tr>"); 
                }
            }
            
    

        ?>
    </table>
    
</body>
</html>

