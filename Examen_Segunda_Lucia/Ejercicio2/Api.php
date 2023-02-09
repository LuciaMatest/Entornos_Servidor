<?php
require_once './controlador/ControladorPadre.php';
require_once './controlador/SorteosControlador.php';

$recurso = ControladorPadre::recurso();

if($recurso) {
    if($recurso[0] == "numeros") {
        $controlador = new SorteosControlador();
        $controlador->controlar();
    }
    
}

?>