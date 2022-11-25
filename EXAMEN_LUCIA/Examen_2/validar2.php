<?php
function selecciona($nombre){
    if(isset($_REQUEST[$nombre]))
        if(count($_REQUEST[$nombre]) == 1){
            return true;
    }
    return false;
}
?>