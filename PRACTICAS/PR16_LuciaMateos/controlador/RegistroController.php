<?php
    if (isset($_REQUEST['registrar'])) {
        //validamos el formulario
        //$_SESSION['error'] el motivo por el que no valida
        $user = new Usuario($_REQUEST['user'],sha1($_REQUEST['contraseña']),$_REQUEST['nombre'],$_REQUEST['email'],$_REQUEST['fecha'],$_REQUEST['rol']);
        if (UsuarioDAO::insert($user)) {
            $_SESSION['controlador']=$controladores['home'];
            $_SESSION['vista']=$vistas['home'];
            $_SESSION['validado'] = true;
            $_SESSION['user'] = $user->usuario;
            $_SESSION['nombre'] = $user->nombre;
            $_SESSION['rol'] = $user->rol;
        } else {
            $_SESSION['error'] = 'No se ha podido registrarse';
        }
    }
