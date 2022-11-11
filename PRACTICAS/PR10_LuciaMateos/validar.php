<?php
function vacio($nombre){
    if(isset($_REQUEST['editar']) || isset($_REQUEST['leer'])){
        return true;
    }
    return false;
}

function enviado(){
    if (isset($_REQUEST['enviar']))
        return true;
    return false;
}

