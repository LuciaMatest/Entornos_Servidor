<?
    require_once './controller/ControladorPadre.php';
    require_once './controller/TareasControlador.php';
    require_once './model/Tarea.php';
    require_once './dao/TareaDAO.php';

    $recurso = ControladorPadre::recurso();

    if($recurso){
        if($recurso[1]=='tareas'){
            $controlador = new TareasControlador();
            $controlador->controlar();
        }
    }