<?
function get()
{
    $conexion = curl_init();
    $url = 'http://192.168.2.200/tema7/api/conciertos.php/conciertos';
    // $url = 'http://192.168.2.205/ServidorClase/Tema7/api/conciertos.php/conciertos';
    // $url = 'http://192.168.2.214/DWES/Tema7/api/conciertos.php/conciertos';
    curl_setopt($conexion, CURLOPT_URL, $url);
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

    $resultado = curl_exec($conexion);
    curl_close($conexion);
    return $resultado;
}

function post($grupo, $fecha, $precio, $lugar)
{
    $json = '{
            "grupo":"' . $grupo . '" ,
            "fecha":"' . $fecha . '" ,
            "precio":"' . $precio . '" ,
            "lugar":"' . $lugar . '" 
        }';
    $conexion = curl_init();
    $url = 'http://192.168.2.200/tema7/api/conciertos.php/conciertos';
    curl_setopt($conexion, CURLOPT_URL, $url);
    curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($conexion, CURLOPT_POST, 1);
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $json);
    curl_exec($conexion);
    curl_close($conexion);
    return 1;
}

function put($id, $grupo, $fecha, $precio, $lugar)
{
    $json = '{
        "grupo":"' . $grupo . '" ,
        "fecha":"' . $fecha . '" ,
        "precio":"' . $precio . '" ,
        "lugar":"' . $lugar . '" 
    }';
    $conexion = curl_init();
    $url = 'http://192.168.2.200/tema7/api/conciertos.php/conciertos/' . $id;
    curl_setopt($conexion, CURLOPT_URL, $url);
    curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $json);
    curl_exec($conexion);
    curl_close($conexion);
    return 1;
}

function delete($id)
{
    $conexion = curl_init();
    $url = 'http://192.168.2.200/tema7/api/conciertos.php/conciertos/' . $id;
    curl_setopt($conexion, CURLOPT_URL, $url);
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_exec($conexion);
    curl_close($conexion);
    return 1;
}
