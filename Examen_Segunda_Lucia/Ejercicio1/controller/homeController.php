<?php
if (isset($_REQUEST['enviar'])) {
    $_SESSION['vista'] = $vistas['apuesta'];
    $_SESSION['controlador'] = $controladores['apuesta'];
    require_once $_SESSION['controlador'];
} else {
    if (isset($_REQUEST['user'])) {
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        if (empty($user)) {
            $_SESSION['error'] = 'Debe rellenar el nombre';
        }
        if (empty($pass)) {
            $_SESSION['error'] = 'Debe rellenar la contraseña';
        } else {
            $usuario = UsuarioDAO::valida($user, $pass);
            if ($usuario != null) {
                $_SESSION['validado'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['nombre'] = $usuario->nombre;
                $_SESSION['perfil'] = $usuario->perfil;
                $_SESSION['vista'] = $vistas['home'];
                $_SESSION['controlador'] = $controladores['home'];
                header('Location: ./index.php');
            }
        }
    }
}
