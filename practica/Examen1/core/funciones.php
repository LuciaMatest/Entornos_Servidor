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

function selecciona($nombre)
{
    if (isset($_REQUEST[$nombre]))
        if (count($_REQUEST[$nombre]) == 5) {
            return true;
        }
    return false;
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
function sorteo()
{
    if (SorteoDAO::findByFecha(date('Y-m-d'))) {
        return true;
    } else {
        return false;
    }
}

function getApi()
{
    $ch = curl_init();
    $url = 'http://192.168.2.204/Entornos_Servidor/Examen2/Api.php/numeros?min=1&max=50';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);
    curl_close($ch);
    return $resultado;
}

// function recuperarSeleccion($objeto)
// {
//     if (ApuestaDAO::findById($objeto)) {
//         return true;
//     } else {
//         return false;
//     }
// }
