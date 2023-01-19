<?
    $user=$_REQUEST['user'];
    $pass=$_REQUEST['pass'];
    if (empty($user)) {
        $_SESSION['error']='Debe rellenar el nombre';       
    }
    if (empty($pass)) {
        $_SESSION['error']='Debe rellenar la contraseña';
    }else {
        $usuario=UsuarioDAO::valida($user,$pass);
        if ($usuario!=null){
            $_SESSION['validado']= true;
            $_SESSION['user']= $user;
            $_SESSION['nombre']= $usuario->nombre;
            $_SESSION['perfil']= $usuario->perfil;
            $_SESSION['vista']= $vistas['home'];
            unset($_SESSION['controlador']);
        }
    }
?>