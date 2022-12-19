<?php
require './BD.php';
//Sacamos usuario y contraseña del formulario donde se van a introducir los datos
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

if (validarUser($user, $pass)) {
    if ($_SESSION['perfil'] == 'ADM01') {
        header('Location: ../paginas/admin.php');
        exit;
    } else {
        header('Location: ../paginas/home.php');
        exit;
    }
} else {
    header('Location: ../login.php');
        exit;
}
?>