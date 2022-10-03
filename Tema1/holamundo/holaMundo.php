<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Texto</h1>
        <?
        echo "<h2>Hola Mundo</h2>";
        print"<h3>Hola Clase</h3>";
        ?>

   <h1>Tipos de Datos</h1>
        <?var_dump("lazaro")?>
        <br>
        <? var_dump(9.5)?>


    <h2>Variables</h2>
    <p>
        <?
            $miVariable = 3;
            var_dump($miVariable);
            echo "<br>";
            $miVariable = "Lazaro";
            var_dump($miVariable);
            echo "<br>";
            $miFloat = 5.5;
            $nuevoInt = (int)$miFloat;
            var_dump($miFloat);
            echo "<br>";

            $miBoolean = true;
            var_dump($miBoolean);

            echo "<br>";
            $vacia = NULL;
            var_dump( is_null($vacia) );

        ?>
    </p>

    <h1>GET</h1>
        <p> 
            <? 
            var_dump($_GET);
            echo "<br>";
            echo "<p> Mi variable es de tipo: ". gettype($miVariable). "</p>";
            echo "<p> El dato hijos es de tipo: " . is_numeric($_GET["hijos"]) . "</p>";
            ?>
        </p>
        
        <h2>Variable de variable</h2>
            <?
                $viernes = "fiesta";
                $$viernes = "copas";

                echo $viernes;
                echo "<br>";
                echo $$viernes;
                echo "<br>";
                echo $fiesta;
            ?>
</body>
</html>