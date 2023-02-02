<?
    if(isset($_REQUEST['ver'])){
        $_SESSION['vista']=$vistas['verProducto'];
        $_SESSION['controlador']=$controladores['producto'];
        $_SESSION['producto']=$_REQUEST['idProducto'];
        require_once $_SESSION['controlador'];
    }
?>