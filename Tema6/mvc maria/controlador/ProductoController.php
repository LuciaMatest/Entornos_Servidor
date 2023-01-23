<?
if(isset($_REQUEST['codProd']))
    $_SESSION['producto'] = $_REQUEST['codProd'];
$producto = ProductoDAO::findById($_SESSION['producto']);