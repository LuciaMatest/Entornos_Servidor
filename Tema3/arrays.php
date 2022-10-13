<?php
    echo "<h1>Arrays</h1>";

    echo "<h2>Arrays numerico</h2>";
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

    echo "<br>";
    array_push($meses, "Agosto");
    foreach ($meses as $key) {
        echo $key. "<br>";
    }
    
    echo "<br>";
    array_pop($meses);
    foreach ($meses as $key) {
        echo $key. "<br>";
    }

    //quitar un elemento
    unset($meses[0]);
    echo "<pre>";
    echo var_dump($meses);
    echo "</pre>";

    print_r($meses);
    
    echo "<h2>Arrays asociativo</h2>";

    $notas= array("Cristian"=>7,"Lucia"=>8, "Itziar"=>10, "Manuel" =>9, "Javier"=> 8.5);
    echo "<br>";
    print_r($notas);
    echo "<br>";
    echo "<br>Nota ". $notas["Lucia"];

    foreach ($notas as $key => $value) {
        echo "<br>Nota de " .$key. " es " .$value;
    }

    echo "<br>";
    foreach ($notas as $key) {
        echo "<br>Nota: " .$key;
    }

    echo "<h2>Arrays multidimensionales</h2>";
    $multi = array(array(),array());
    echo var_dump($multi);

    $asignaturas = array(
        "DAM" => array("PROG" => "Programacion","LM" => "Lenguaje de Marcas"),
        "DAW2" => array("DWES" => "Servidor", "DWEC" => "Cliente")
    );

    //recorrer
    foreach ($asignaturas as $key => $value) {
        echo "<br>El curso de " . $key . " tiene las asignaturas ";
        foreach ($value as $siglas => $nombre) {
            echo "<br>" . $siglas . " : " . $nombre;
        }
    }
    
    echo "<h2>Funciones</h2>";
    //apunta al primer valor del array
    echo "Current " . current($notas);
    echo "<br>";
    //apunta al ultimo valor del array
    echo "End " . end($notas);
    echo "<br>";
    //primer valor del array
    echo "Reset " . reset($notas);
    echo "<br>";
    //primera clave del array
    echo "Key " . key($notas);
    echo "<br>";
    
?>