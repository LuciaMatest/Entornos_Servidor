<?php
function vacio($nombre){
        if(empty($_REQUEST[$nombre])){
            return true;
        }
        return false;
    }

    function enviado(){
        if(isset($_REQUEST["enviar"])){
            return true;
        }
        return false;
    }

    function existe($nombre){
        if(isset($_REQUEST[$nombre])){
           return true;
        }
        return false;
    }

    function veces($nombre){
        if(isset($_REQUEST[$nombre]))
            if(count($_REQUEST[$nombre]) > 3){
                return true;
            }
        return false;
    }

    function longitud($nombre){
        if(isset($_REQUEST[$nombre])){
            $i = $_REQUEST[$nombre];
            if(strlen($i) == 9){
                return true;
            }
        }
        return false;
    }

    function comprobacion(){
        if (enviado()) {
            if (!vacio("alnum")) {
                 if (!vacio('nombre')) {
                     if (!vacio('fecha')) {
                         if (existe('radio')) {
                             if (existe('opciones') && $_REQUEST['opciones']!=0) {
                                if (existe('check') && !veces('check')) {
                                     if (!vacio('telefono') && longitud('telefono')) {
                                         return true;
                                     }
                                }
                             }
                         }
                     }
                 }
            }
         }
         return false;
    }


    function mostrarResultados(){
       echo "<p>Nombre: ". $_REQUEST["nombre"] . "</p>";
        if(existe($_REQUEST["nombreo"])){
            echo "<p>Nombre opcional: ". $_REQUEST["nombreo"] . "</p>";
        }
       echo "<p>Alfanumerico: ". $_REQUEST["alnum"] . "</p>";
       if(existe($_REQUEST["alnumop"])){
            echo "<p>Alfanumerico opcional: ". $_REQUEST["alnumop"] . "</p>";
       }
       echo "<p>Fecha: ". $_REQUEST["fecha"] . "</p>";
       if(existe($_REQUEST["fechao"])){
            echo "<p>Fecha opcional: ". $_REQUEST["fechao"] . "</p>";
       }
       echo "<p>opciones radio: ". $_REQUEST["radio"] . "</p>";
       echo "<p>opciones desplegable: ". $_REQUEST["opciones"] . "</p>";
       echo "<p>";
       echo "opciones check: ";
       foreach($_REQUEST["check"] as $value){
        echo "| $value ";
       }
       echo "</p>";
       echo "<p>telefono: ". $_REQUEST["telefono"] . "</p>";
       echo "<p>mail: ". $_REQUEST["mail"] . "</p>";
       echo "<p>contraseña: ". $_REQUEST["pass"] . "</p>";
       echo "<p> fichero: ";
       echo $_FILES['fichero']['name'];
       echo "</p>";
    }
?>