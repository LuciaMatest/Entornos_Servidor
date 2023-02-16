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
                //quitar del array el valor $id
                $key = array_search($id, $array);
                unset($array[$key]);
                array_push($array,$id);
            } else {
                //si ya tiene 3 y no existe en el array
                if (count($array)==3) {
                    unset($array[0]);
                }
                array_push($array,$id);
            }
            actualizar($array);
        }
    }

    function actualizar($array){
        $contador = 0;
        foreach ($array as $id) {
            setcookie('visto['.$contador.']',$id);
            $contador++;
        }
    }

    function monstrarUltimos(){
        if (isset($_COOKIE['visto'])) {
            $array = $_COOKIE['visto'];
            $array = array_reverse($array);
            foreach ($array as $id) {
                $producto = findById($id);
                $producto =$producto[0];
                echo "<article>";
                echo "<a href='./verProducto.php?producto=".$producto['codigo']."'><img src= './webroot/".$producto['baja']."' alt='pan'></a>";
                echo '<h2>'.$producto['nombre']. '</h2>';               
                echo "</article>"; 
            }
        }
    }
?>