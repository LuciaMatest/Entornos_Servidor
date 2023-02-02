<?
if (isset($_REQUEST['ver'])) {
    $_SESSION['producto'] = $_REQUEST['cod_producto'];
    $producto = ProductoDAO::findById($_REQUEST['cod_producto']);
    $_SESSION['vista'] =  $vistas['verProducto'];
} elseif (isset($_REQUEST['comprar'])) {
    $_SESSION['controlador'] = $controladores['ventas'];
    $_SESSION['pagina'] = 'Home';
    $_SESSION['vista'] = $vistas['home'];
    require($_SESSION['controlador']);
}
