<?
if (isset($_REQUEST['cod_producto'])) {
    $_SESSION['producto'] = $_REQUEST['cod_producto'];
    $producto = ProductoDAO::findById($_REQUEST['cod_producto']);
    $_SESSION['vista'] =  $vistas['verProducto'];
} elseif (isset($_REQUEST['comprar'])) {
    $_SESSION['controlador'] = $controladores['ventas'];
    $_SESSION['pagina'] = 'Home';
    require($_SESSION['controlador']);
}
