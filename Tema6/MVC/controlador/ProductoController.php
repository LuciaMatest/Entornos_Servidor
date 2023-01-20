<?
    $_SESSION['producto'] = $_REQUEST['codProd'];
    $producto = ProductoDAO::findById($_REQUEST['codProd']);
?>