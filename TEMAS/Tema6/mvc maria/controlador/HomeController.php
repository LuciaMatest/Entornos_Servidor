<?
if (isset($_REQUEST['ver'])) {
    $_SESSION['vista'] = $vistas['verProducto'];
    $_SESSION['controlador'] = $controladores['producto'];
    require_once $_SESSION['controlador'];
} else {


    $arrayProductos = ProductoDAO::findAll();
}
