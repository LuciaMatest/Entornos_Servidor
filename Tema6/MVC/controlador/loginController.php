<?php
if ($_REQUEST['registro']) {
    $_SESSION['controlador'] = $controladores['registro'];
    $_SESSION['vista'] = $vistas['registro'];
} else{
    if (isset($_REQUEST['user'])) {
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        if (empty($user)) {
            $_SESSION['error'] = 'Debe rellenar el nombre';
        }
        if (empty($pass)) {
            $_SESSION['error'] = 'Debe rellenar la contraseña';
        } else {
            $usuario = UsuarioDAO::valida($user,$pass);
            if ($usuario!=null) {
                $_SESSION['validado'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['nombre'] = $usuario->nombre;
                $_SESSION['perfil'] = $usuario->perfil;
                $_SESSION['vista'] = $vistas['home'];
                $_SESSION['controlador'] = $controladores['user'];
        }
    }
    }
}
    
    
?>