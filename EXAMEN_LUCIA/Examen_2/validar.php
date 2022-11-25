<?php
function vacio($nombre){
    if(empty($_REQUEST['nombre'])) {
        return true;
    }
    return false;
}

function enviado(){
    if (isset($_REQUEST['Enviado']))
        return true;
    return false;
}

function existe($nombre){
    if (isset($_REQUEST[$nombre]))
        return true;
    return false;
}

//Patrones
function patronNombre(){
    $patron = '/^([A-Z][a-z]{3,}\s[A-Z][a-z]{3,}\s[A-Z][a-z]{3,})$/';
    if (preg_match($patron, $_REQUEST['nombre'])==1) {
        return true;
    }
    return false;
}

function patronExpediente(){
    $patron = '/^(\d{2}[A-Z]{3})\/(\d{2})$/';
    if (preg_match($patron, $_REQUEST['exp'])==1) {
        return true;
    }
    return false;
}
?>