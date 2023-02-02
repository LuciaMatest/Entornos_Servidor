<?
if (isset($_REQUEST['ventas'])) {
    $ventas = VentasDAO::findAll();
} elseif (isset($_REQUEST['eliminar'])) {
    $_SESSION['producto'] = $_REQUEST['id_ventas'];
    $ventas = VentasDAO::delete($_REQUEST['id_ventas']);
    $listaProducto = VentasDAO::findAll();
} elseif (isset($_REQUEST['editar'])) {
    $_SESSION['producto'] = $_REQUEST['id_ventas'];
    $ventas = VentasDAO::findById($_REQUEST['id_ventas']);
    $_SESSION['vista'] =  $vistas['modificarVentas'];
} elseif (isset($_REQUEST['id_ventas'])) {
    $_SESSION['producto'] = $_REQUEST['id_ventas'];
    $ventas = VentasDAO::findById($_REQUEST['id_ventas']);
    $_SESSION['vista'] =  $vistas['verProducto'];
}
