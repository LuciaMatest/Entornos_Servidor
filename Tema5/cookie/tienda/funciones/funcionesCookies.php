<?php
    function crearCookie($id){
        //Si no existe ninguna cookie creamos [0]
        if (!$_COOKIE['visto']) {
            setcookie('visto[0]',$id);
        }else {
            //El array como máximo va a tener 3
            //Si existe en el array
            $array = $_COOKIE['visto'];
            if (in_array($id, $array)) {
                # code...
            }
        }
        //guardar en un array
        print_r($_COOKIE['visto']);
    }
?>