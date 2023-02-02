<?
if (isset($_REQUEST['ventas'])) {
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['eliminar'])) {
    $_SESSION['ventas'] = $_REQUEST['id_ventas'];
    $ventas = VentasDAO::delete($_REQUEST['id_ventas']);
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['comprar'])) {
    $producto = ProductoDAO::findById($_SESSION['producto']);
    $producto->stock = ($producto->stock) - (int)$_REQUEST['cantidad'];
    $venta = new Ventas(null, $_SESSION['user'], date('Y-m-d'), $_SESSION['producto'], $_REQUEST['cantidad'], ($producto->precio * (int)$_REQUEST['cantidad']));
    VentasDAO::insert($venta);
    ProductoDAO::update($producto);
    $ventas = VentasDAO::findAll();
} else {
    $ventas = VentasDAO::findAll();
}
