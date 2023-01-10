<?php
    function crearCookie($id){
        //Si no existe ninguna cookie creamos [0]
        if (!isset($_COOKIE['visto'])) {
            setcookie('visto[0]',$id);
        }else {
            //El array como máximo va a tener 3
            //Si existe en el array
            $array = $_COOKIE['visto'];
            //si el producto ya ha sido visto
            if (in_array($id, $array)) {
                # code...
            } else {
                //si ya tiene 3 y no existe en el array
                if (count($array)==3) {
                    unset($array[0]);
                }
                array_push($array,$id);
            }
            actualizar($array);
        }
        //guardar en un array
        print_r($_COOKIE['visto']);
    }

    function actualizar($array){
        $contador = 0;
        foreach ($array as $id) {
            setcookie('visto['.$contador.']',$id);
            $contador++;
        }
    }
?>