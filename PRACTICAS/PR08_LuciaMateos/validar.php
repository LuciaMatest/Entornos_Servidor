<?php
function vacio($nombre){
    if (empty($_REQUEST[$nombre])) {
        return true;
    }
    return false;
}

function enviado(){
    if (isset($_REQUEST['enviar']))
        return true;
    return false;
}

function existe($nombre){
    if (isset($_REQUEST[$nombre]))
        return true;
    return false;
}

function selecciona($array){
    if (count($_REQUEST[$array])>3){
        return true;
    }
    return false;
}
?>