<?php
    session_start();
    require '../funciones/funciones.php';

    if(!estaValidado() || !esAdmin()){
        header('Location: ../login.php');
        exit;
    }
?>
<h1>Administrador</h1>