<?
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm ="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'No autorizado';
} else {
    switch ($_REQUEST['opcion']) {
        case 'modifica':
            if (($_SERVER['PHP_AUTH_USER'] == 'lucia' && $_SERVER['PHP_AUTH_PW'] == 'lucia') || ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'admin')) {
                header('Location: ./modificarBBDD.php?opcion="' . $_REQUEST['opcion'] . '"&clave="' . $_REQUEST['clave'] . '"');
                exit;
            }
            break;
        case 'inserta':
            if (($_SERVER['PHP_AUTH_USER'] == 'lucia' && $_SERVER['PHP_AUTH_PW'] == 'lucia') || ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'admin')) {
                header('Location: ./modificarBBDD.php?opcion="' . $_REQUEST['opcion'] . '"');
                exit;
            }
            break;
        case 'elimina':
            if ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'admin') {
                header('Location: ./modificarBBDD.php?opcion="' . $_REQUEST['opcion'] . '"');
                exit;
            }

            break;

        default:
            echo 'Error';
            break;
    }
}
