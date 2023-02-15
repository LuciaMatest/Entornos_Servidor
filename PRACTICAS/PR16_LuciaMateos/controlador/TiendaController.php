<?
if (isset($_REQUEST['ver'])) {
    $_SESSION['accion'] = 'ver';
    $_SESSION['producto'] = $_REQUEST['cod_producto'];
    $_SESSION['vista'] = $vistas['verProducto'];
    $_SESSION['controlador'] = $controladores['producto'];
    require_once $_SESSION['controlador'];
} else {
    $array_productos = ProductoDAO::findAll();
}
