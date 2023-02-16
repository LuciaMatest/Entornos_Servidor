<?
if (isset($_REQUEST['borrar'])){
    $_SESSION['producto'] = $_REQUEST['codProd'];
    $producto = ProductoDAO::delete($_REQUEST['codProd']);
    $listaProducto = ProductoDAO::findAll();
}elseif (isset($_REQUEST['editar'])){
    $_SESSION['producto'] = $_REQUEST['codProd'];
    $producto = ProductoDAO::findById($_REQUEST['codProd']);
    $_SESSION['vista'] =  $vistas['editarProducto'];
}elseif (isset($_REQUEST['codProd'])) {
    $_SESSION['producto'] = $_REQUEST['codProd'];
    $producto = ProductoDAO::findById($_REQUEST['codProd']);
    $_SESSION['vista'] =  $vistas['verProducto'];
} else if (isset($_REQUEST['admProductos'])) {
    $listaProducto = ProductoDAO::findAll();
} 
?>