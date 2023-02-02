<?
if (isset($_REQUEST['almacen'])) {
    $almacen = ProductoDAO::findAll();
} elseif (isset($_REQUEST['modificar'])) {
    $producto = ProductoDAO::findById($_SESSION['producto']);
    $producto->precio=(float)$_REQUEST['precio'];
    $producto->descripcion=$_REQUEST['descripcion'];
    ProductoDAO::update($producto);
} else {
    $almacen = ProductoDAO::findAll();
}
