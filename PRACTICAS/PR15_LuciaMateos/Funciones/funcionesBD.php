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
    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] == 'ADM01')
            return true;
    }
    return false;
}

function esModerador(){
    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] == 'M0001')
            return true;
    }
    return false;
}

function esUsuario(){
    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] == 'U0001')
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
function validarNombre(){
    if(validaSoloUser($_REQUEST['nombre'])){
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
    $patron = '/^(\d{4})\-(0[1-9]|1[0-2])\-([0-2][0-9]|3[0-1])$/';
    if(preg_match($patron, $_REQUEST['fecha'])==1){
        return true;
    }
    return false;
}

//Verificar datos
function verificar(){
    if (enviado()){
        if (!vacio('nombre') && validarNombre()) {
            if(!vacio("contraseña") && !vacio('contraseña2') && patronContraseña() && $_REQUEST['contraseña']==$_REQUEST['contraseña2']){
                if (!vacio('email') && patronEmail()) {
                    if (!vacio('fecha') && patronFecha()) {
                        return true;
                    }
                }
            }
        }
    }
    return false;
}
?>