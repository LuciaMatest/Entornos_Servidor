<?php
    function enviado(){
        if (isset($_REQUEST['guardar'])) {
            return true;
        }
        return false;
    }
?>