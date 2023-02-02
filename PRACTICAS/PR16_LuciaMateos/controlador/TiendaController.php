<?
    if (isset($_REQUEST['ver'])){
        $_SESSION['vista']=$vistas['verProducto'];
        $_SESSION['controlador']=$controladores['producto'];
        $_SESSION['producto']=$_REQUEST['cod_producto'];
        $_SESSION['accion']='ver';
        require_once $_SESSION['controlador'];
    }
