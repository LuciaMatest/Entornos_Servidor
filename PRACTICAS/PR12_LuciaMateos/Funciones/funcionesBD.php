<?php
function existe($nombre){
    if (isset($_REQUEST[$nombre]))
        return true;
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
?>