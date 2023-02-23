<?
//----------------------------------------------
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

function get()
{
    $ch = curl_init();
    $url = 'http://192.168.2.204/Entornos_Servidor/00EXAMENFINAL/Ejercicio2/partidos.php/partidos';
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $resultado = curl_exec($ch);
    curl_close($ch);
    return $resultado;
}
