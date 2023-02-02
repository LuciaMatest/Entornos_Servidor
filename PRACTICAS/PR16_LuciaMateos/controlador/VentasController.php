<?
if (isset($_REQUEST['ventas'])) {
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['eliminar'])) {
    $_SESSION['ventas'] = $_REQUEST['id_ventas'];
    $ventas = VentasDAO::delete($_REQUEST['id_ventas']);
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['comprar'])) {
    $producto = ProductoDAO::findById($_SESSION['producto']);
    VentasDAO::insert($producto);
} else {
    $ventas = VentasDAO::findAll();
}
