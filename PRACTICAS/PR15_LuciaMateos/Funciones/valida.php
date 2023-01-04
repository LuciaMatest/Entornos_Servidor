<?php
session_start();
require './BD.php';
//Sacamos usuario y contraseña del formulario donde se van a introducir los datos
$user = $_REQUEST['user'];
$pass = $_REQUEST['contraseña'];

if (empty($user)) {
    $_SESSION['error'] = '<span style="color:brown"> Debe rellenar el nombre</span>';
    header('Location: ../login.php');
    exit;
}elseif (empty($pass)) {
    $_SESSION['error'] = '<span style="color:brown"> Debe rellenar el contraseña</span>';
    header('Location: ../login.php');
    exit;
} else {
    if (validarUser($user, $pass)) {
        if ($_SESSION['roles'] == 'ADM01') {
            header('Location: ../index.php');
            exit;
        } else {
            header('Location: ../index.php');
            exit;
        }
    } else {
        $_SESSION['error'] = '<span style="color:brown"> No existe el usuario o contraseña</span>';
        header('Location: ../login.php');
        exit;
    }
}
?>