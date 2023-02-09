<?
function estaValidado()
{
    if (isset($_SESSION['validado'])) {
        return true;
    }
    return false;
}

function vacio($dato)
{
    if (empty($_REQUEST[$dato])) {
        return true;
    } else {
        return false;
    }
}
//----------------------------------------------
function esAdmin()
{
    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] == 'admin') {
            return true;
        }
        return false;
    }
}
function esUsuario()
{
    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] == 'user') {
            return true;
        }
        return false;
    }
}
//----------------------------------------------
function selecciona($nombre){
    if(isset($_REQUEST[$nombre]))
        if(count($_REQUEST[$nombre]) == 5){
            return true;
    }
    return false;
}