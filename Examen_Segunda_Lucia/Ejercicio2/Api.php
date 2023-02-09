<?php
require_once('./config/conexionBD.php');
require_once('./dao/FactoryBD.php');
require_once('./dao/DAO.php');
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