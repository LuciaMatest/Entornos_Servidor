<?php
function existe($nombre){
    if (isset($_REQUEST[$nombre])){
        return true;
    }
    return false;
    }
    
function enviado(){
    if (isset($_REQUEST[$nombre])){
        return true;
    }
    return false;
}
    
if (isset($_REQUEST['leer'])){
    header('Location: ./LeeFichero.php?fichero='.$_REQUEST['fichero']);
    exit();
}

if (isset($_REQUEST['editar'])) {
    header('Location: ./EditaFichero.php?fichero='. $_REQUEST['fichero']);
    exit();
}
?>