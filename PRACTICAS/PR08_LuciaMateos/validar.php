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

function cantidadDigitos($nombre){
    if(isset($_REQUEST[$nombre]))
        if(strlen($_REQUEST[$nombre]) == 9){
            return true;
    }
    return false;
}

function verificar(){
    if (enviado()) {
        if (!vacio("nombre")) {
            if (!vacio("apellido")) {
                if (!vacio("fecha")) {
                    if (existe("opcion")) {
                        if (existe("check")) {
                            if (!vacio("telefono")) {
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}


?>