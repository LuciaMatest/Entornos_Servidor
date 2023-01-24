<?php
    require('./config/configuracion.php');

    session_start();

    if (isset($_REQUEST['home'])) {
        $_SESSION['controlador'] = $controladores['home'];
        $_SESSION['pagina'] = 'home';
        $_SESSION['vista'] = $vistas['home'];
        require_once($_SESSION['controlador']);
    }
    require_once('./vista/layout.php');

?>