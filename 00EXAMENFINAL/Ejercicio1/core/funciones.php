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
// Buscar
function get()
{
    $ch = curl_init();
    $url = 'http://192.168.2.204/Entornos_Servidor/00EXAMENFINAL/Ejercicio2/partidos.php/partidos';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);
    curl_close($ch);
    return $resultado;
}
// Buscar por partido
function getByIdPartido($id)
{
    $ch = curl_init();
    $url = 'http://192.168.2.204/Entornos_Servidor/00EXAMENFINAL/Ejercicio2/partidos.php/partidos/' . $id;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);
    curl_close($ch);
    return $resultado;
}
// Buscar por usuario
function getById($id)
{
    $ch = curl_init();
    $url = 'http://192.168.2.204/Entornos_Servidor/00EXAMENFINAL/Ejercicio2/partidos.php/partidos?jugador=' . $id;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);
    curl_close($ch);
    return $resultado;
}
// Insertar nuevo partido
function postPartido($jug1, $jug2, $fecha, $resultado)
{
    $json = '{
        "jug1": "' . $jug1 . '",
        "jug2": "' . $jug2 . '",
        "fecha": "' . $fecha . '",
        "resultado": "' . $resultado . '"
    }';
    $ch = curl_init();
    $url = 'http://192.168.2.204/Entornos_Servidor/00EXAMENFINAL/Ejercicio2/partidos.php/partidos';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array('Content-Type:application/json')
    );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_exec($ch);
    curl_close($ch);
    return 1;
}
// Modificar partido
function putPartido($id, $jug1, $jug2, $fecha, $resultado)
{
    $json = '{
        "jug1": "' . $jug1 . '",
        "jug2": "' . $jug2 . '",
        "fecha": "' . $fecha . '",
        "resultado": "' . $resultado . '"
    }';

    $ch = curl_init();
    $url = 'http://192.168.2.204/Entornos_Servidor/00EXAMENFINAL/Ejercicio2/partidos.php/partidos/' . $id;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array('Content-Type:application/json')
    );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_exec($ch);
    curl_close($ch);
    return 1;
}
// Eliminar partido
function deletePartido($id)
{
    $ch = curl_init();
    $url = 'http://192.168.2.204/Entornos_Servidor/00EXAMENFINAL/Ejercicio2/partidos.php/partidos/' . $id;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_exec($ch);
    curl_close($ch);
    return 1;
}
