<?php
require './BD.php';
//Sacamos usuario y contraseña del formulario donde se van a introducir los datos
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

if (empty($user)) {
    $_SESSION['error'] = 'Debe rellenar el nombre';
    header('Location : ../login.php');
    exit;
} else {
    if (validarUser($user, $pass)) {
        if ($_SESSION['perfil'] == 'ADM01') {
            header('Location: ../paginas/admin.php');
            exit;
        } else {
            header('Location: ../paginas/home.php');
            exit;
        }
    } else {
        $_SESSION['error'] = 'No existe el usuario';
        header('Location: ../login.php');
        exit;
    }
}
?>