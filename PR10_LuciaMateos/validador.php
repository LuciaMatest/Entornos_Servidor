<?php
    function enviado(){
        if (isset($_REQUEST['editar']) || isset($_REQUEST['leer'] )){
            return true;
        }
        return false;
    }

    function existe($nombre){
        if (isset($_REQUEST[$nombre]))
            return true;
        return false;
    }

    
?>