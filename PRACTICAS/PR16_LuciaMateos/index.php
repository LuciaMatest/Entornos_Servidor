<?
require_once('./config/configuracion.php');
session_start();

if (isset($_REQUEST['home'])) {

    $_SESSION['controlador'] = $controladores['home'];
    $_SESSION['vista'] = $vistas['home'];
    $_SESSION['pagina'] = 'home';
    require_once $_SESSION['controlador'];
} elseif (isset($_REQUEST['logout'])) {

    session_destroy();
    $_SESSION['controlador'] = $controladores['home'];
    $_SESSION['vista'] = $vistas['home'];
    $_SESSION['pagina'] = 'home';
    header('Location: index.php');
} else {

    if (!isset($_SESSION['pagina'])) {

        //si no tiene una vista home
        $_SESSION['controlador'] = $controladores['home'];
        $_SESSION['pagina'] = 'home';
        $_SESSION['vista'] = $vistas['home'];
        require_once($_SESSION['controlador']);
    } elseif (isset($_REQUEST['login'])) {

        //si ha pulsado login
        $_SESSION['pagina'] = 'login';
        $_SESSION['controlador'] = $controladores['login'];
        $_SESSION['vista'] = $vistas['login'];
    } elseif (isset($_SESSION['pagina'])) {
        // perfil
        if (isset($_REQUEST['miperfil'])) {

            $_SESSION['accion'] = 'ver';
            $_SESSION['controlador'] = $controladores['perfil'];
            $_SESSION['vista'] = $vistas['perfil'];
            require_once($_SESSION['controlador']);
            // tienda
        } elseif (isset($_REQUEST['tienda'])) {

            $_SESSION['controlador'] = $controladores['tienda'];
            $_SESSION['pagina'] = 'tienda';
            $_SESSION['vista'] = $vistas['tienda'];
            require_once $_SESSION['controlador'];
            //almacen
        } elseif (isset($_REQUEST['almacen'])) {

            $_SESSION['controlador'] = $controladores['producto'];
            $_SESSION['pagina'] = 'Almacen';
            $_SESSION['vista'] = $vistas['almacen'];
            require_once $_SESSION['controlador'];
            //albaran
        } elseif (isset($_REQUEST['albaran'])) {

            $_SESSION['controlador'] = $controladores['producto'];
            $_SESSION['pagina'] = 'Albaran';
            $_SESSION['vista'] = $vistas['albaran'];
            require_once $_SESSION['controlador'];
            //ventas
        } elseif (isset($_REQUEST['ventas'])) {

            $_SESSION['controlador'] = $controladores['ventas'];
            $_SESSION['pagina'] = 'ventas';
            $_SESSION['vista'] = $vistas['ventas'];
            require_once $_SESSION['controlador'];
            //registro
        } elseif (isset($_REQUEST['registro'])) {

            $_SESSION['controlador'] = $controladores['registro'];
            $_SESSION['pagina'] = 'registrar';
            $_SESSION['vista'] = $vistas['registro'];
            require_once $_SESSION['controlador'];
        } else {
            require_once($_SESSION['controlador']);
        }
    }
}
require_once('./vista/layout.php');
