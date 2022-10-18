<?php
    function saludo() {
        echo "<p>Un saludito</p>";
    }
    echo "<br><br>";
    function saludo2($nombre) {
        echo "Un saludito " .$nombre;
    }

    function saludo4($nombre) {
        global $nombre;
        $nombre= $nombre . " Valor";

    }

    function saludo6(&$nombre){
        $nombre = $nombre . "valor";
        echo "Hola  " . $nombre;
    }


    function lahora($array){
        array_push($array,date("d-m-Y H:s"));
        print_r($array);
    }

    function cambioLado($objeto,$lado){
        $objeto->lado = $lado;
    }


?>