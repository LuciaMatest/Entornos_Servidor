<?
    function get(){
        $con= curl_init();
        $url= 'http://192.168.2.206/DAWServidor/DWES/Tema7/api/conciertos.php/conciertos';
        curl_setopt($con, CURLOPT_URL, $url);
        //curl_setopt($con, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($con, CURLOPT_RETURNTRANSFER, true);

        $resultado=curl_exec($con);

        return json_decode($resultado);
    }

    function post($grupo,$fecha,$precio,$lugar){
        $json='{
            "grupo":"'.$grupo.'" ,
            "fecha":"'.$fecha.'" ,
            "precio":"'.$precio.'" ,
            "lugar":"'.$lugar.'" 
        }';
        $con= curl_init();
        $url= 'http://192.168.2.206/DAWServidor/DWES/Tema7/api/conciertos.php/conciertos';
        curl_setopt($con, CURLOPT_URL, $url);
        curl_setopt($con, CURLOPT_HTTPHEADER, 'Content-Type:application/json');
        curl_setopt($con, CURLOPT_POST, 1);
        $resultado=curl_exec($con);

        curl_setopt($con,CURLOPT_POSTFIELDS, $json);
        curl_close($con);


    }
