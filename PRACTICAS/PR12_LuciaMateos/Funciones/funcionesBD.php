<?php
function existe($nombre){
    if (isset($_REQUEST[$nombre]))
        return true;
    return false;
}

function enviado(){
    if (isset($_REQUEST['guardar'])) {
        return true;
    }
    return false;
}
?>