<?
    require_once './controlador/ControladorPadre.php';
    require_once './controlador/EquipoControlador.php';
    require_once './controlador/JugadoresControlador.php';
    require_once './dao/EquipoDAO.php';
    require_once './dao/JugadoresDAO.php';
    require_once './modelo/Equipo.php';
    require_once './modelo/Jugadores.php';
    
    $recurso=ControladorPadre::recurso(); 

    if($recurso){
        if ($recurso[1]=='equipo') {
            $controlador= new EquipoControlador();
            $controlador->controlar();
        } else if ($recurso[1]=='jugadores') {
            $controlador= new JugadoresControlador();
            $controlador->controlar();
        }
    }
