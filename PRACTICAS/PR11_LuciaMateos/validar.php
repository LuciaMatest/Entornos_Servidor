<?php
    function enviado(){
        if (isset($_REQUEST['guardar'])) {
            return true;
        }
        return false;
    }

    function vacio($nombre){
        if (empty($_REQUEST[$nombre])) {
            return true;
        }
        return false;
    }

    function patronNotas($nombre){
        $patron = '/^(\d|10)$/';
        if (preg_match($patron, $_REQUEST[$nombre])) {
            return true;
        }
        return false;
    }

    function verificar(){
        if (enviado()) {
            if (!vacio('nota1') && patronNotas('nota1')) {
                if (!vacio('nota2') && patronNotas('nota2')) {
                    if (!vacio('nota3') && patronNotas('nota3')) {
                        return true;
                    }
                }
            }
        }
        return false;
    }
?>