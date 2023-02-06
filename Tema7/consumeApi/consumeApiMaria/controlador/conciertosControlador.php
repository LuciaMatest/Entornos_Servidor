<?
require_once '../peticiones/curl.php';

if (isset($_REQUEST['accion'])) {
    if ($_REQUEST['accion'] == 'listar') {
        $lista = get();
        $lista = json_decode($lista, true);
        require '../vista/listar.php';
    } else if ($_REQUEST['accion'] == 'guardar') {
        //funcion comprobar formulario
        if (post($_REQUEST['grupo'], $_REQUEST['fecha'], $_REQUEST['precio'], $_REQUEST['lugar'])) {
            $lista = get();
            $lista = json_decode($lista, true);
            require '../vista/listar.php';
        } else {
            require '../vista/formInsert.php';
        }
    } else if ($_REQUEST['accion'] == 'modificar') {
        //funcion comprobar formulario
        if (put($_REQUEST['id'], $_REQUEST['grupo'], $_REQUEST['fecha'], $_REQUEST['precio'], $_REQUEST['lugar'])) {
            $lista = get();
            $lista = json_decode($lista, true);
            require '../vista/listar.php';
        } else {
            require '../vista/formInsert.php';
        }
    }
    else if ($_REQUEST['accion'] == 'borrar') {
        //funcion comprobar formulario
        if (delete($_REQUEST['id'])) {
            $lista = get();
            $lista = json_decode($lista, true);
            require '../vista/listar.php';
        } else {
            require '../vista/formInsert.php';
        }
         
    }
}
