<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Apuntes</title>
</head>
<body>
    <?php
         include("./funciones.php");
         saludo();
         saludo2("Carlos");
         echo "<br><br>"; 
         //Pasar un array 
         $array=array();
        lahora($array);
        
        
        echo "<br><br>"; 
        //Objeto
        
        class Cuadrado{
            public $lado= 5;
        }
    
        $objeto= new Cuadrado();
        cambioLado($objeto, 6);
        echo "Objeto= " .$objeto->lado;
    ?>
</body>
</html>