<?php
function estaValidado()
{
    if (isset($_SESSION['validado'])) {
        return true;
    }
    return false;
}

function esAdmin()
{
    if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] == 'ADM01')
            return true;
    }
    return false;
}

function esModerador()
{
    if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] == 'M0001')
            return true;
    }
    return false;
}

function esUsuario()
{
    if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] == 'U0001')
            return true;
    }
    return false;
}

function vacio($nombre)
{
    if (empty($_REQUEST[$nombre])) {
        return true;
    }
    return false;
}

function patronEmail()
{
    $patron = '/^.{1,}@.{1,}\..{2,}/';
    if (preg_match($patron, $_REQUEST['email']) == 1) {
        return true;
    }
    return false;
}

function patronContraseña()
{
    $patron = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){8,}/';
    if (preg_match($patron, $_REQUEST['contraseña']) == 1) {
        return true;
    }
    return false;
}

function patronFecha()
{
    $patron = '/^([0-9]{1,4})\-(0[1-9]|1[0-2])\-([0-2][0-9]|3[0-1])$/';
    // $patron = '/^([0-2][0-9]|3[0-1])\-(0[1-9]|1[0-2])\-([0-9]{1,4})$/';
    if (preg_match($patron, $_REQUEST['fecha']) == 1) {
        $partes = explode('-', $_REQUEST['fecha']);
        if (checkdate($partes[1], $partes[2], $partes[0])) {
            return true;
        }
    }
    return false;
}

function patronImagenAlta()
{
    $patron = '/^[^.]+\.(jpg|png|bmp)$/';
    if (preg_match($patron, $_FILES['imagen_alta']['name'])) {
        return true;
    }
    return false;
}

function patronImagenBaja()
{
    $patron = '/^[^.]+\.(jpg|png|bmp)$/';
    if (preg_match($patron, $_FILES['imagen_baja']['name'])) {
        return true;
    }
    return false;
}

// function verificar()
// {
//     if (!isset($_REQUEST['guardar'])) {
//         $_SESSION['error']['enviado'] = 'No enviado';
//         if (vacio('user') || UsuarioDAO::findById($_REQUEST['user']) != null) {
//             $_SESSION['error']['user'] = 'Fallo de usuario';
//             if (vacio('contraseña') || vacio('contraseña2') || !patronContraseña() || $_REQUEST['contraseña'] != $_REQUEST['contraseña2']) {
//                 $_SESSION['error']['contraseña'] = 'Fallo de contraseña';
//                 if (vacio('nombre')) {
//                     $_SESSION['error']['nombre'] = 'Fallo de nombre';
//                     if (vacio('email') || !patronEmail()) {
//                         $_SESSION['error']['email'] = 'Fallo de email';
//                         if (vacio('fecha') || !patronFecha()) {
//                             $_SESSION['error']['fecha'] = 'Fallo de fecha';
//                             if (!isset($_REQUEST['rol']) || $_REQUEST['rol'] == 0) {
//                                 $_SESSION['error']['rol'] = 'Fallo de rol';
//                                 if (!isset($_SESSION['error'])) {
//                                     return true;
//                                 }
//                             }
//                         }
//                     }
//                 }
//             }
//         }
//     } else {
//         return false;
//     }
// }

function validarUsuario()
{
}

function validarNuevoUsuario()
{
}

function validarAlmacen()
{
}

function validarAlbarán()
{
}

function validarVentas()
{
}
