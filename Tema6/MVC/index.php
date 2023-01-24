<?php
    require('./config/configuracion.php');

    session_start();

    if (isset($_REQUEST['home'])) {
        $_SESSION['controlador'] = $controladores['home'];
        $_SESSION['pagina'] = 'home';
        $_SESSION['vista'] = $vistas['home'];
        require_once($_SESSION['controlador']);
    }elseif (isset($_REQUEST['logout'])) {
        session_destroy();
        header(('Location: index.php'));
        exit;
    } else {
        if (!isset($_SESSION['pagina'])) {
            $_SESSION['controlador'] = $controladores['home'];
            $_SESSION['pagina'] = 'home';
            $_SESSION['vista'] = $vistas['home'];
            require_once($_SESSION['controlador']);
        } elseif (isset($_REQUEST['login'])) {
            $_SESSION['pagina'] = 'login';
            $_SESSION['controlador'] = $controladores['login'];
            $_SESSION['vista'] = $vistas['login'];
        } elseif (isset($_SESSION['pagina'])) {
            if (isset($_REQUEST['miperfil'])) {
                $_SESSION['accion'] = 'ver';
                $_SESSION['controlador'] = $controladores['user'];
                $_SESSION['vista'] = $vistas['user'];
                require_once($_SESSION['controlador']);
            } elseif (esAdmin() && isset($_REQUEST['admin'])) {
                $_SESSION['pagina'] = 'admin';
                $_SESSION['controlador'] = $controladores['admin'];
                $_SESSION['vista'] = $vistas['admin'];
                require_once($_SESSION['controlador']);
            } else {
                require_once($_SESSION['controlador']);
            }
        }
}
    require_once('./vista/layout.php');

?>