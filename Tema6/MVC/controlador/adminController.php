<?
    if (isset($_REQUEST['admProductos'])) {
        $_SESSION['vista'] = $vistas['listaProd'];
        $_SESSION['controlador'] = $controladores['producto'];
    }
?>