<?
    if (isset($_REQUEST['editar'])) {
        $_SESSION['accion']= 'editar';
        $usuario=UsuarioDAO::findById($_SESSION['user']);
        
    }elseif (isset($_REQUEST['guardar'])) {
        //funcion validaContraseña
        $_SESSION['accion']= 'ver';
        $usuario=UsuarioDAO::findById($_SESSION['user']);
        $usuario->nombre=$_REQUEST['nombre'];
        $usuario->correo=$_REQUEST['email'];
        $usuario->clave=$_REQUEST['pass'];
        $usuario->roles=$_REQUEST['roles'];

        if(!UsuarioDAO::update($usuario)) {
            $_SESSION['error']="No se ha podido modificar";
            $_SESSION['accion']= 'editar';
        }
        
    }else{
        $usuario=UsuarioDAO::findById($_SESSION['user']);
        $_SESSION['vista'] = $vistas['user'];
    }
?>