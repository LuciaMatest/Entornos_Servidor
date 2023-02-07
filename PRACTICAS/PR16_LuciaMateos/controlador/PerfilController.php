<?php
if (isset($_REQUEST['editar'])) {
    $_SESSION['accion'] = 'editar';
    $usuario = UsuarioDAO::findById($_SESSION['user']);
} elseif (isset($_REQUEST['guardar'])) {
    if (validarUsuario()) {
        $_SESSION['accion'] = 'ver';
        $usuario = UsuarioDAO::findById($_SESSION['user']);
        $usuario->clave = $_REQUEST['contraseña'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->correo = $_REQUEST['email'];
        $usuario->rol = $_REQUEST['rol'];

        if (!UsuarioDAO::update($usuario)) {
            $_SESSION['error'] = '<script>alert("No se ha conseguido guardar los cambios");</script>';
            $_SESSION['accion'] = 'editar';
            $_SESSION['nombre'] = $usuario->nombre;
            $_SESSION['rol'] = $usuario->rol;
        }
    }
    $usuario = UsuarioDAO::findById($_SESSION['user']);
} else {
    $usuario = UsuarioDAO::findById($_SESSION['user']);
    $_SESSION['vista'] = $vistas['perfil'];
}
