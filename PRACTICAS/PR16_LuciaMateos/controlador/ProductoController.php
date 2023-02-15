<?
if (isset($_REQUEST['ver'])) {
    $_SESSION['producto'] = $_REQUEST['cod_producto'];
    $producto = ProductoDAO::findById($_REQUEST['cod_producto']);
    $_SESSION['vista'] =  $vistas['verProducto'];
} elseif (isset($_REQUEST['comprar'])) {
    if (!estaValidado()) {
        $_SESSION['error'] = '<script>alert("Debe iniciar sesión o registrarse primero");</script>';
        $_SESSION['controlador'] = $controladores['login'];
        $_SESSION['pagina'] = 'Login';
        $_SESSION['vista'] = $vistas['login'];
    } else {
        $_SESSION['controlador'] = $controladores['ventas'];
        $_SESSION['pagina'] = 'Home';
        $_SESSION['vista'] = $vistas['home'];
        require($_SESSION['controlador']);
    }
}
