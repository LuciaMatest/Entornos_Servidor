<?php
    function estaValidado(){
        if (isset($_SESSION['validado'])) {
            return true;
        }
        return false;
    }

    function esAdmin(){
        if (isset($_SESSION['rol'])) {
            if ($_SESSION['rol']=='ADM01') {
                return true;
            }
        }
        return false;
    }

    function esModerador(){
        if (isset($_SESSION['rol'])) {
            if ($_SESSION['rol']=='M0001') {
                return true;
            }
        }
        return false;
    }
?>