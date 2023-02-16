<h2>Tipos de datos especiales</h2>
<h3>Fechas</h3>
<?php
    echo time();
    echo "<br>";
    echo "<h4>Zona</h4>";
    echo date_default_timezone_get();
    echo "<br>";
    date_default_timezone_set('Europe/Madrid');
    echo date_default_timezone_get();

    echo "<h4>Fecha de hoy</h4>";
    echo date("d M Y");
    echo "<br>";
    echo date("d M Y", 1234869984);
    echo "<br>";
    echo date("d m Y", 1234869984);
    echo "<br>";
    echo date("D m Y", 1234869984);
    echo "<br>";
    echo date("d m y", 1234869984);
    echo "<br>";
    echo date("d m Y O", 1234869984);
    echo "<br>";
    echo date("d m Y h:i:s", 1234869984);

    echo "<h4>Fecha de hoy</h4>";
    echo strtotime("now");
    echo "<br>";
    echo strtotime("last Monday");
    echo "<br>";
    echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";

    echo "<h4>Combinar</h4>";
    echo date("d-m-Y", strtotime("2022-10-04"));

    echo "<h4>Mktime</h4>";
    echo mktime(0,0,0,10,04,2022);

    echo "<h4>Diferencia entre dos fechas</h4>";
    $primera = mktime(0,0,0,10,11,1994);
    $segunda = strtotime("2022-10-04");
    $diferencia = $segunda - $primera;
    
    echo "Diferencia: " .$diferencia;

    $a = $diferencia / (60*60*24*365);
    echo "<br>Los años que han pasado son: " .$a;

    //Objetos 
    $fecha1 = new DateTime("1994-10-11");
    $fecha2 = new DateTime();
    $intervalo = $fecha2->diff($fecha1);
    echo "<br>";
    echo "<br>años: " .$intervalo->y . " meses: " .$intervalo->m . " dias: " .$intervalo->d;
?>
