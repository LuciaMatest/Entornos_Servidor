<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1º Página </title>
</head>
<body>
    <h1>1º Página</h1>
    <?php
        
        echo "<p>";
        echo "1º Muestra el nombre del fichero que se está ejecutando:";
        echo "<br/>";
        echo (__FILE__);
        echo "</p>";
        
        echo "<p>";
        echo "2º Muestra la dirección IP del equipo desde el que estás accediendo.";
        echo $_SERVER['REMOTE_ADDR'];
        echo "</p>";

        echo "<p>";
        echo "3º Muestra el path donde se encuentra el fichero que se está ejecutando";
        echo "<br/>";
        echo(__DIR__);
        echo "</p>";

        echo "<p>";
        echo "4º Muestra la fecha y hora actual formateada en 2022-09-4 19:17:18:";
        echo "<br/>";
        date_default_timezone_set('Europe/Madrid');
        echo date("Y-m-d h:i:s ");
        echo "</p>";
       
        echo "<p>";
        echo "6º Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de
        mes de año, hh:mm:ss , Zona horaria). ";
        echo "<br/>";
        date_default_timezone_set('Europe/Lisbon');
        echo date("Y-m-d h:i:s "). date_default_timezone_get();
        echo "</p>";

        echo "<p>";
        echo "Inicializa y muestra una variable en timestamp y en fecha con formato dd/mm/yyyy 
        de tu cumpleaños";
        echo "<br/>";
        $fecha1 = strtotime("2001-09-29");
        $fecha2 = date("29-09-2001");
        echo "timestamp:".$fecha1;
        echo "<br/>";
        echo "Fecha:".$fecha2;
        echo "</p>";
        
    
    ?>
</body>
</html>