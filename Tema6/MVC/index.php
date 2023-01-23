<?php
    require('./config/configuracion.php');

    session_start();

    if (isset($_REQUEST['logout'])) {
        session_destroy();
        $_SESSION['controlador'] = $controladores['login'];
        $_SESSION['vista'] = $vistas['login'];
        $_SESSION['pagina'] = 'login';
        header(('Location: index.php'));
    }

    if (estaValidado() && !isset($_SESSION['pagina'])) {
        $_SESSION['vista'] = $vistas['home'];
    } elseif ((!estaValidado() && !isset($_SESSION['pagina'])) || isset($_REQUEST['login'])) {
        $_SESSION['pagina'] = 'login';
        $_SESSION['controlador'] = $controladores['login'];
        $_SESSION['vista'] = $vistas['login'];
    } elseif (isset($_SESSION['pagina'])) {
        if (esAdmin() && isset($_REQUEST['admin'])) {
            $_SESSION['pagina'] = 'admin';
            $_SESSION['controlador'] = $controladores['admin'];
            $_SESSION['vista'] = $vistas['admin'];
            require_once($_SESSION['controlador']);
        } else {
            require_once($_SESSION['controlador']);
        }
    }
    require_once('./vista/layout.php');

?>