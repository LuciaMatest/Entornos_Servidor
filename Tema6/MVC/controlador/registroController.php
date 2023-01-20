<?php
    if (isset($_REQUEST['guardar'])) {
        //validamos el formulario
        //$_SESSION['error'] el motivo por el que no valida
        $user = Usuario($_REQUEST['user'],$_REQUEST['nombre'],$_REQUEST['email'],$_REQUEST['pass'],'P0001');
        if (UsuarioDAO::insert($user)) {
            $_SESSION['controlador']=$controladores['home'];
            $_SESSION['vista']=$vistas['home'];
            $_SESSION['validado'] = true;
            $_SESSION['user'] = $user->usuario;
            $_SESSION['nombre'] = $user->nombre;
            $_SESSION['perfil'] = $user->perfil;
        } else {
            $_SESSION['error'] = 'No se ha podido registrarse';
        }
    }
?>