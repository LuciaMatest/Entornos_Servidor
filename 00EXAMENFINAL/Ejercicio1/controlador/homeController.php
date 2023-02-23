<?
if (isset($_REQUEST['user'])) {
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    //Recuerdame
    if (isset($_REQUEST["recuerdame"])) {
        setcookie("nombre_usuario", $user);
        setcookie("recuerdame", $user);
    } else {
        // Si no queremos seguir recordando
        setcookie("nombre_usuario", $user, time() - 1);
        setcookie("recuerdame", $user, time() - 1);
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
                $_SESSION['vista'] = $vistas['admin'];
                $_SESSION['controlador'] = $controladores['admin'];
                header('Location: ./index.php');
            } else {
                $_SESSION['vista'] = $vistas['usuario'];
                $_SESSION['controlador'] = $controladores['usuario'];
                header('Location: ./index.php');
            }
        }
    }
}
