<?
require_once './config/configuracion.php';

$recurso = ControladorPadre::recurso();

if ($recurso) {
    if ($recurso[1] == 'numeros') {
        $controlador = new SorteosControlador();
        $controlador->controlar();
    }
}
