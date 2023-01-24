<?php
   if (isset($_REQUEST['editar'])) {
        $_SESSION['accion'] = 'editar';
        $usuario = UsuarioDAO::findById($_SESSION['user']);

    } elseif (isset($_REQUEST['guardar'])) {
        //funcion validaContraseñas
        $_SESSION['accion'] = 'ver';
        $usuario = UsuarioDAO::findById($_SESSION['user']);
        $usuario->clave = $_REQUEST['pass'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->correo = $_REQUEST['email'];
        $usuario->perfil = $_REQUEST['perfil'];
        if (UsuarioDAO::update($usuario)) {
            $_SESSION['accion'] = 'editar';
            $_SESSION['error'] = 'No se ha conseguido guardar los cambios';
        }
    } else {
        $usuario = UsuarioDAO::findById($_SESSION['user']);
        $_SESSION['pagina'] = 'vista';
        $_SESSION['vista'] = $vistas['user'];
    }
    
?>