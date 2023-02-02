<?
if (isset($_REQUEST['ventas'])) {
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['eliminar'])) {
    $_SESSION['ventas'] = $_REQUEST['id_ventas'];
    $ventas = VentasDAO::delete($_REQUEST['id_ventas']);
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['comprar'])) {
    $producto = ProductoDAO::findById($_SESSION['producto']);
    $producto->stock = ($producto->stock) - $_REQUEST['cantidad'];
    ProductoDAO::update($producto);
    $ventas = new Ventas(null, $_SESSION['user'], date('Y-m-d'), $_SESSION['producto'], $_REQUEST['cantidad'], (float)(($producto->precio) * $_REQUEST['cantidad']));
    VentasDAO::insert($ventas);
} else {
    $ventas = VentasDAO::findAll();
}
