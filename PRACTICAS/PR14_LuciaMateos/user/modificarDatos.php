<?
    if ($_REQUEST['opcion']=='modifica'){
        header('Location: ../modificarBBDD.php?opcion='.$_REQUEST['opcion'].'&clave='.$_REQUEST['clave']);
    }elseif ($_REQUEST['opcion']=='inserta') {
        header('Location: ../modificarBBDD.php?opcion='.$_REQUEST['opcion']);
    }
    //admin lucia
    //lucia lucia
