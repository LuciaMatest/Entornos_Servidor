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

function selecciona($nombre){
    if(isset($_REQUEST[$nombre]))
        if(count($_REQUEST[$nombre]) > 3){
            return true;
    }
    return false;
}
?>