<?
if (isset($_REQUEST['codProd'])) {
    $_SESSION['producto'] = $_REQUEST['codProd'];
} else {
    $producto = ProductoDAO::findById($_REQUEST['codProd']);
}
?>