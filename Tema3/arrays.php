<?php
    echo "<h1>Arrays</h1>";

    //array numerico
    //vacio
    $meses = array();
    echo var_dump($meses);

    //con datos
    $meses = array("Enero", "Febrero", "Marzo");
    echo "<pre>";
    echo var_dump($meses);
    echo "</pre>";

    //con logitud determinada
    $diasSemana = array(7);
    echo "<pre>";
    echo var_dump($diasSemana);
    echo "</pre>";

    //sintaxis corta
    $notas= [2.3, 5.3];
    echo "<pre>";
    echo var_dump($notas);
    echo "</pre>";

    //acceder o modificar
    echo $meses[2];
    echo "<br>";

    //contar numero de elementos
    echo "<br>";
    echo count($meses);
    echo "<br>";
    for ($i=0; $i < count($meses) ; $i++) { 
        echo "<br>";
        echo $meses[$i];
    }

    //asignar nuevos valores al array
    echo "<br>";
    $meses[3] = "Abril";
    for ($i=0; $i < count($meses) ; $i++) { 
        echo "<br>";
        echo $meses[$i];
    }

    echo "<br>";
    $meses[5] = "Junio";
    $meses[6] = "Julio";
    echo "<br>";
    echo count($meses);
    echo "<pre>";
    echo var_dump($meses);
    echo "</pre>";
    for ($i=0; $i < count($meses) ; $i++) { 
        echo "<br>";
        echo $meses[$i];
    }

    echo "<br><br>";
    array_push($meses, "Agosto");
    foreach ($meses as $key) {
        echo $key. "<br>";
    }
?>