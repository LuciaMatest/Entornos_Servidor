<?
if (isset($_REQUEST['eliminar'])){
    $_SESSION['producto'] = $_REQUEST['cod_producto'];
    $producto = ProductoDAO::delete($_REQUEST['cod_producto']);
    $listaProducto = ProductoDAO::findAll();
}elseif (isset($_REQUEST['editar'])){
    $_SESSION['producto'] = $_REQUEST['cod_producto'];
    $producto = ProductoDAO::findById($_REQUEST['cod_producto']);
    $_SESSION['vista'] =  $vistas['modificarProducto'];
}elseif (isset($_REQUEST['cod_producto'])) {
    $_SESSION['producto'] = $_REQUEST['cod_producto'];
    $producto = ProductoDAO::findById($_REQUEST['cod_producto']);
    $_SESSION['vista'] =  $vistas['verProducto'];
} 



?>