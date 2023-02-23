<?
require_once './controller/ControladorPadre.php';
require_once './controller/PartidosControlador.php';
require_once './model/Partido.php';
require_once './dao/PartidoDAO.php';

$recurso = ControladorPadre::recurso();

if($recurso){
    if($recurso[1]=='partidos'){
        $controlador = new PartidosControlador();
        $controlador->controlar();
    }
}