<?
require_once('./config/configuracion.php');

session_start();

//Si está la pagina 'home'
if (isset($_REQUEST['home'])) {
    $_SESSION['controlador'] = $controladores['home'];
    $_SESSION['vista'] = $vistas['home'];
    $_SESSION['pagina'] = 'Home';
    require_once $_SESSION['controlador'];

    //Si quiere desloguearse
} elseif (isset($_REQUEST['logout'])) {
    session_destroy();
    $_SESSION['controlador'] = $controladores['home'];
    $_SESSION['vista'] = $vistas['home'];
    $_SESSION['pagina'] = 'Home';
    header('Location: index.php');

    //Otras opciones
} else {
    //Si no tiene página se le asigna la principal
    if (!isset($_SESSION['pagina'])) {
        $_SESSION['vista'] = $vistas['home'];
        $_SESSION['controlador'] = $controladores['home'];
        $_SESSION['pagina'] = 'Home';
        require_once $_SESSION['controlador'];

        //Una vez se tenga ya página 
    } elseif (isset($_SESSION['pagina'])) {
        //apuestas
        if (isset($_REQUEST['apuesta'])) {
            $_SESSION['controlador'] = $controladores['apuesta'];
            $_SESSION['pagina'] = 'Apuesta';
            $_SESSION['vista'] = $vistas['apuesta'];
            require_once $_SESSION['controlador'];
        //sorteo
        } elseif (isset($_REQUEST['sorteo'])) {

            $_SESSION['controlador'] = $controladores['sorteo'];
            $_SESSION['pagina'] = 'Sorteo';
            $_SESSION['vista'] = $vistas['sorteo'];
            require_once $_SESSION['controlador'];
            //albaran
        } else {
            //require_once $_SESSION['controlador'];
        }
    }
}

//Y por último siempre se precisará de nuestro layout 
require_once('./view/layout.php');
