<?
require_once('./config/configuracion.php');

session_start();

if (isset($_REQUEST['home'])) {
    //Al acceder lo primero que veremos será el home donde nos loguearemos
    $_SESSION['controlador'] = $controladores['home'];
    $_SESSION['vista'] = $vistas['home'];
    $_SESSION['pagina'] = 'Home';
    require_once $_SESSION['controlador'];
} elseif (isset($_REQUEST['logout'])) {
    //Desloguearse
    session_destroy();
    //Al cerrar sesion volveremos a la pagina principal
    $_SESSION['controlador'] = $controladores['home'];
    $_SESSION['vista'] = $vistas['home'];
    $_SESSION['pagina'] = 'Home';
    header('Location: index.php');
} else {
    if (!isset($_SESSION['pagina'])) {
        //Si no tiene página se le asigna la principal
        $_SESSION['controlador'] = $controladores['home'];
        $_SESSION['vista'] = $vistas['home'];
        $_SESSION['pagina'] = 'Home';
        require_once $_SESSION['controlador'];
    } elseif (isset($_SESSION['pagina'])) {
        ///Páginas por donde podemos movernos
        if (isset($_SESSION['admin'])) {
            //Pagina de admin donde se pueden ver todos los partidos con los que podemos realizar acciones
            $_SESSION['controlador'] = $controladores['admin'];
            $_SESSION['vista'] = $vistas['admin'];
            $_SESSION['pagina'] = 'Admin';
            require_once $_SESSION['controlador'];
        } elseif (isset($_SESSION['usuario'])) {
            //Pagina de partidos del usuario donde puede ver los que ha jugado
            $_SESSION['controlador'] = $controladores['usuario'];
            $_SESSION['vista'] = $vistas['usuario'];
            $_SESSION['pagina'] = 'Usuario';
            require_once $_SESSION['controlador'];
        } else {
            require_once $_SESSION['controlador'];
        }
    }
}
//Siempre tendremos el layout 
require_once('./vista/layout.php');
