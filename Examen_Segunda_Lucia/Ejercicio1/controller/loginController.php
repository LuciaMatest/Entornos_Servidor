<?
    //Si pulsa registro se le cambiará la vista a formulario de registro
    if (isset($_REQUEST['registro'])){
        $_SESSION['vista']=$vistas['registro'];
        $_SESSION['controlador']=$controladores['registro'];
    }else{
        //Si se ha enviado un usuario vamos a comprobarlo
        if (isset($_REQUEST['user'])){
            $user=$_REQUEST['user'];
            $pass=$_REQUEST['pass'];
            if (empty($user)) {
                $_SESSION['errorLog']['usuario']='Debe rellenar el nombre';       
            }
            if (empty($pass)) {
                $_SESSION['errorLog']['pass']='Debe rellenar la contraseña';
            }else {
                unset($_SESSION['errorLog']);
                $usuario=UsuarioDAO::valida($user,$pass);
                if ($usuario!=null){
                    $_SESSION['validado']= true;
                    $_SESSION['user']= $user;
                    $_SESSION['nombre']= $usuario->nombre;
                    $_SESSION['roles']= $usuario->roles;
                    //Guardamos la vista de home
                    $_SESSION['vista']= $vistas['home'];
                    $_SESSION['controlador']=$controladores['home'];
                    //Y volvemos al index
                    header('Location: ./index.php');
                }
            }
        }
    }

?>