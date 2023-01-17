<?
    $user=$_REQUEST['user'];
    $pass=$_REQUEST['pass'];
    if (empty($user)) {
        $_SESSION['error']='Debe rellenar el nombre';       
    }
    if (empty($pass)) {
        $_SESSION['error']='Debe rellenar la contraseña';
    }else {
        
    }
?>