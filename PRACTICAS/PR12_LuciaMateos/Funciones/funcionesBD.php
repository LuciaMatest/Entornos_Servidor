<?php
function existe($nombre){
    if (isset($_REQUEST[$nombre]))
        return true;
    return false;
}

function vacio($nombre){
    if (empty($_REQUEST[$nombre])) {
        return true;
    }
    return false;
}

function enviado(){
    if (isset($_REQUEST['enviar'])) {
        return true;
    }
    return false;
}

function crearBBDD(){
    if (isset($_REQUEST['crear']))
    return true;
    return false;
}

function usarBBDD(){
    return file_get_contents('./BBDD/musica.sql');
}

//Patrones
function patronID(){
    $patron = '/\d{1,}$/';
    if (preg_match($patron, $_REQUEST['id'])==1) {
        return true;
    }
    return false;
}

function patronFecha(){
    $patron = '/^([0-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-([0-9]{1,4})$/';
    if (preg_match($patron, $_REQUEST['fecha'])==1) {
        $partes = explode('-', $_REQUEST['fecha']);
        if (checkdate($partes[1],$partes[0],$partes[2])) {
            return true;
        }
    }
    return false;
}

function patronDuracion(){
    $patron = '/^(\d{1,3})\.(\d{,2})$/';
    if (preg_match($patron, $_REQUEST['duracion'])==1) {
        return true;
    }
    return false;
}
?>