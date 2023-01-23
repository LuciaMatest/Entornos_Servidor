<?
if (isset($_REQUEST['codProd'])) {
    $_SESSION['producto'] = $_REQUEST['codProd'];
    $producto = ProductoDAO::findById($_REQUEST['codProd']);
} else if (isset($_REQUEST['admProductos'])) {
    $listaProducto = ProductoDAO::findAll();
} else {
    $producto = ProductoDAO::findById($_REQUEST['codProd']);
}
?>