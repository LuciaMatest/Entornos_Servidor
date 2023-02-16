<?
if (isset($_REQUEST['user'])) {
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['contraseña'];

    //Recuerdame
    if (isset($_REQUEST["recuerdame"])) {
        setcookie("nombre_usuario", $user);
    }
    //Controlamos los errores posibles
    if (empty($user)) {
        $_SESSION['error'] = '<span style="color:brown"> Debe rellenar el nombre</span>';
    }
    if (empty($pass)) {
        $_SESSION['error'] = '<span style="color:brown"> Debe rellenar la contraseña</span>';
    } else {
        $usuario = UsuarioDAO::valida($user, $pass);
        if ($usuario != null) {
            $_SESSION['validado'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['id'] = $usuario->id;
            $_SESSION['nombre'] = $usuario->nombre;
            $_SESSION['perfil'] = $usuario->perfil;
            //Dependiendo de que usuario se loguee, accedera a una pagia u otra
            if (esAdmin()) {
                $_SESSION['vista'] = $vistas['sorteo'];
                $_SESSION['controlador'] = $controladores['sorteo'];
                header('Location: ./index.php');
            } else {
                $_SESSION['vista'] = $vistas['apuesta'];
                $_SESSION['controlador'] = $controladores['apuesta'];
                header('Location: ./index.php');
            }
        }
    }
}
