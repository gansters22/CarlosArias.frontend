<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/general.css">
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


    <form method="post" class="forenviar" id="forenviar">
        <label for="nombre"></label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellido"></label>
        <input type="text" id="apellido" name="apellido">
        <label for="edad"></label>
        <input type="text" id="edad"" name="edad">
        <label for="ciudad"></label>
        <input type="text" id="ciudad" name="ciudad">
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <input type="submit" name="insertar" value="insertar">
    <input type="submit" name="mostrar" value="mostrar">
    <input type="submit" name="actualizar" value="actualizar">
    <input type="submit" name="borrar" value="borrar">


</body>
</html>


<?php
    session_start();
    if (!isset($_SESSION['usuarios'])){
        $_SESSION['usuarios']=array();
    }
    
    
    if (isset($_POST['enviar'])){
        if (strlen($_POST['nombre'])>=1 && 
        strlen($_POST['apellido'])>=1 && 
        strlen($_POST['edad'])>=1 && 
        strlen($_POST['ciudad'])>=1){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $edad=$_POST['edad'];
            $ciudad=$_POST['ciudad'];
            $_SESSION['usuarios'][]=["nombre"=>$nombre,"apellido"=>$apellido,"edad"=>$edad,"ciudad"=>$ciudad];
            print_r($_SESSION['usuarios']);
        }else{
            echo("<h1>Todos los campos deben estar llenos</h1>");
        }    
    }
    
?>