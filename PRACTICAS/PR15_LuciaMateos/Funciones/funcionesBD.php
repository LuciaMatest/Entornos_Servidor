<?php
// BBDD
function usarBBDD(){
    return file_get_contents('./BBDD/peluqueria.sql');
}

// Perfiles
function estaValidado(){
    if (isset($_SESSION['validado'])) {
        return true;
    }
    return false;
}

function esAdmin(){
    if (isset($_SESSION['roles'])) {
        if ($_SESSION['roles'] == 'ADM01')
            return true;
    }
    return false;
}

function esModerador(){
    if (isset($_SESSION['roles'])) {
        if ($_SESSION['roles'] == 'M0001')
            return true;
    }
    return false;
}

function esUsuario(){
    if (isset($_SESSION['roles'])) {
        if ($_SESSION['roles'] == 'U0001')
            return true;
    }
    return false;
}

// Comprobaciones
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

function existe($nombre){
    if (isset($_REQUEST[$nombre]))
        return true;
    return false;
}

//Patrones
function validarUsuario(){
    if(validaUser($_REQUEST['user'])){
        return true;
    }
    return false;
}

function patronEmail(){
    $patron = '/^.{1,}@.{1,}\..{2,}/';
    if (preg_match($patron, $_REQUEST['email'])==1) {
        return true;
    }
    return false;
}

function patronContraseña(){
    $patron='/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){8,}/';
    if(preg_match($patron, $_REQUEST['contraseña']) == 1){
        return true;
    }
    return false;
}

function patronFecha(){
    $patron = '/^([0-9]{1,4})\-(0[1-9]|1[0-2])\-([0-2][0-9]|3[0-1])$/';
    // $patron = '/^([0-2][0-9]|3[0-1])\-(0[1-9]|1[0-2])\-([0-9]{1,4})$/';
    if (preg_match($patron, $_REQUEST['fecha'])==1) {
        $partes = explode('-', $_REQUEST['fecha']);
        if (checkdate($partes[1],$partes[2],$partes[0])) {
            return true;
        }
    }
    return false;
}

//Verificar datos
function verificar(){
    if (enviado()){
        if (!vacio('user') && validarUsuario()) {
            if(!vacio("contraseña") && !vacio('contraseña2') && patronContraseña() && $_REQUEST['contraseña']==$_REQUEST['contraseña2']){
                if (!vacio('nombre')) {
                    if (!vacio('email') && patronEmail()) {
                        if (!vacio('fecha') && patronFecha()) {
                            if (existe('rol') && $_REQUEST['rol']!=0) {
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

function guardarCambios(){
    if (enviado()){
        if (!vacio('user')) {
            if(!vacio("contraseña") && patronContraseña()){
                if (!vacio('nombre')) {
                    if (!vacio('email') && patronEmail()) {
                        if (!vacio('fecha') && patronFecha()) {
                            if (existe('rol') && $_REQUEST['rol']!=0) {
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