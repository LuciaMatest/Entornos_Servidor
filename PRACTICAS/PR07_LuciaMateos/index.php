<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/estilo.css">
    <title>Practica 7 || Manuel Hernandez</title>
</head>
<body>
    <?php
        include_once("./funciones.php");

        echo "<h2>1. Crea tu propio fichero de php que tenga las funciones de:</h2>";
        echo "<h3>a. br() Pinta un br:</h3>";
        br();
        echo "<h3>b. h1(cadena) Pinta la cadena entre h1:</h3>";
        h1("Pepito en H1");
        echo "<h3>c. p(cadena) Pinta la cadena entre cadenas:</h3>";
        p("El aliento de mi gato huele a comida de gato");
        echo "<h3>d. self() Devuelve el fichero actual</h3>";
        self();
        echo "<h3>e. letraDNI() Se introduce el dni y devuelve la letra que le corresponde</h3>";

        
    ?>
</body>
</html>