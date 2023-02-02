<?
if (isset($_REQUEST['ventas'])) {
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['eliminar'])) {
    $_SESSION['ventas'] = $_REQUEST['id_ventas'];
    $ventas = VentasDAO::delete($_REQUEST['id_ventas']);
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['comprar'])) {
    $producto = ProductoDAO::findById($_SESSION['cod_producto']);
    $producto->stock = $_REQUEST['stock'] - $_REQUEST['cantidad'];
    $venta = new Ventas(null, $_SESSION['user'], date('Y-m-d'), $_REQUEST['cod_producto'], $_SESSION['cantidad'], (floatval($_REQUEST['precio'])) * (floatval($_REQUEST['cantidad'])));
    VentasDAO::insert($venta);
    ProductoDAO::update($producto);
} else {
    $ventas = VentasDAO::findAll();
}




// $nuevo_stock = $_REQUEST['stock'] - $_REQUEST['cantidad'];
// array($_SESSION['user'], date('Y-m-d'), $_REQUEST['cod_producto'], $_REQUEST['cantidad'], floatval($_REQUEST['precio']) * (floatval($_REQUEST['cantidad'])));