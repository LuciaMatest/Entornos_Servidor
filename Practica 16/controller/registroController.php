<?
if (isset($_REQUEST['guardar'])){
    if (isset($_SESSION['registroError'])) {
        unset($_SESSION['registroError']);
    }
    if (validarRegistro()){
        $nuevo= new Usuario($_REQUEST['user'],sha1($_REQUEST['pass']),$_REQUEST['nombre'],$_REQUEST['email'],$_REQUEST['fecha'],$_REQUEST['roles']);

        if (UsuarioDAO::insert($nuevo)){
            $_SESSION['controlador']=$controladores['home'];
            $_SESSION['vista']=$vistas['home'];
            $_SESSION['validado']= true;
            $_SESSION['user']= $nuevo->usuario;
            $_SESSION['nombre']= $user->nombre;
            $_SESSION['roles']= $nuevo->roles;
        }else{
            $_SESSION['error']='No se ha podido registrar';
        }
    }
}

?>