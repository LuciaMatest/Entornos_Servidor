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
        if (isset($_SESSION['apuesta'])) {
            //Pagina de apuestas donde el usuario elige los numeros
            $_SESSION['controlador'] = $controladores['apuesta'];
            $_SESSION['vista'] = $vistas['apuesta'];
            $_SESSION['pagina'] = 'Apuesta';
            require_once $_SESSION['controlador'];
        } elseif (isset($_SESSION['sorteo'])) {
            //Pagina de sorteo donde el admin generar los numeros y ve el registro de apuestas de los usuarios
            $_SESSION['controlador'] = $controladores['sorteo'];
            $_SESSION['vista'] = $vistas['sorteo'];
            $_SESSION['pagina'] = 'Sorteo';
            require_once $_SESSION['controlador'];
        } else {
            require_once $_SESSION['controlador'];
        }
    }
}
//Siempre tendremos el layout 
require_once('./vista/layout.php');
