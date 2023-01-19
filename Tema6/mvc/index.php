<?
    require_once('./config/configuracion.php');

    
    session_start();
    
    if (estaValidado() && !isset($_SESSION['pagina'])) {
        $_SESSION['vista']=$vistas['home'];
    }elseif (!estaValidado() || isset($_REQUEST['login'])) {
        $_SESSION['pagina']='login';
        $_SESSION['controlador']= $controladores['login'];
        $_SESSION['vista']=$vistas['login'];
    }elseif (isset($_REQUEST['pagina'])) {
        require_once($_SESSION['controlador']);
    }
    require_once('./vista/layout.php');
?>