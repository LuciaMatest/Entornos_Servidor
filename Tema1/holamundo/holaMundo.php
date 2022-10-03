<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>
<body>
    <h1>Pruebas en PHP</h1>
    <?
        print "<p>Hola mundo</p> \n";       
        print "Espacio";     
    ?>

    <h1>Tipos de datos</h1>
    <?
        var_dump("manuel");
        var_dump(8);
        var_dump(8.4);
        var_dump(true);
        var_dump('t'); 
    ?>
<br>
    <h1>Varibles en PHP</h1>
    <?
        $miVariable= 4;
        var_dump($miVariable);
        echo "<br>";
        $miVariable="Manuel";
        var_dump($miVariable);
        echo "<br>";
        $miFloat=2.7;
        $nuevoInt= (int)$miFloat;
        var_dump($miFloat);
        
        var_dump($nuevoInt);

    ?>

    <h2>GET</h2>
    <?
        var_dump ($_GET);
        echo "<br>";
        $valcia= null;
        if (is_null($vacia)){
            echo "<p>Es nula</p>";
        }
        echo "Mi variable es ". gettype($miVariable) . "<br>";


        $numero=7;
        echo "Número es ". gettype($numero) . "<br>";
        if (is_integer($numero)) {
            echo "Confirmo, es un " . gettype($numero) . "<br>";
        }else{
            echo "Desmiento, es un " . gettype($numero) . "<br>";

        }

        echo "La variable" . $_GET["hijos"] . is_numeric($_GET["hijos"]);
    ?>

    <h2> Variables de variables</h2>
    <?php
        $viernes= "fiesta";
        $$viernes= "copas";
        echo $viernes;
        echo "<br>";
        echo $$viernes;
        echo "<br>";
        echo $fiesta;
        
    ?>

</body>
</html>