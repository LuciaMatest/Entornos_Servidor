<?
    function get(){
        $conexion= curl_init();
        $url= 'http://192.168.2.205/ServidorClase/Tema7/api/conciertos.php';
        curl_setopt($conexion, CURLOPT_URL, $url);
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

        $resultado=curl_exec($conexion);
        curl_close($conexion);
        return $resultado;
    }

    function post($grupo,$fecha,$precio,$lugar){
        $json='{
            "grupo":"'.$grupo.'" ,
            "fecha":"'.$fecha.'" ,
            "precio":"'.$precio.'" ,
            "lugar":"'.$lugar.'" 
        }';
        $conexion= curl_init();
        $url= 'http://192.168.2.205/ServidorClase/Tema7/api/conciertos.php/conciertos';
        curl_setopt($conexion, CURLOPT_URL, $url);
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($conexion, CURLOPT_POST, 1);
        curl_setopt($conexion,CURLOPT_POSTFIELDS, $json);
        $resultado=curl_exec($conexion);
        curl_close($conexion);


    }
