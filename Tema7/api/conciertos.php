<?
    require_once './controller/ControladorPadre.php';
    require_once './controller/ConciertosControlador.php';
    require_once './model/Concierto.php';
    require_once './dao/ConciertoDAO.php';
    
    $recurso=ControladorPadre::recurso(); 

    if($recurso){
        if ($recurso[1]=='conciertos') {
            $controlador= new ConciertosControlador();
            $controlador->controlar();
        }
    }

?>