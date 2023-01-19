<?
    if (isset($_REQUEST['miperfil'])) {
        $usuario = UsuarioDAO::findById(($_SESSION['user']));
        $_SESSION['vista'] = $vistas['user'];

    }
?>