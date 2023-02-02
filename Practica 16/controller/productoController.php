<?
    //Editar un producto
    if (isset($_REQUEST['editar'])){
        $_SESSION['accion']='editar';
        $_SESSION['producto']=$_REQUEST['idProducto'];
        $_SESSION['vista']=$vistas['editarProductos'];
        $_SESSION['controlador']=$controladores['editarProductos'];

    }elseif (isset($_REQUEST['aumentar'])) {
        $_SESSION['producto']=$_REQUEST['producto'];
        $producto=ProductoDAO::findById($_SESSION['producto']);
        $producto->stock=($producto->stock)+(int)$_REQUEST['cantidad'];
        ProductoDAO::update($producto);
        $nStock=new Albaran(null,date('Y-m-d'),$_SESSION['producto'],$_REQUEST['cantidad'],$_SESSION['user']);
        AlbaranDAO::insert($nStock);
        $lista= ProductoDAO::findAll();
        $albaran=AlbaranDAO::findAll();

    //Añadir un producto
    }elseif (isset($_REQUEST['nuevo'])) {
        $_SESSION['accion']='nuevo';
        $_SESSION['vista']=$vistas['editarProductos'];
        $_SESSION['controlador']=$controladores['editarProductos'];

    //Ir al almacen
    }elseif(isset($_REQUEST['almacen'])){
        $lista= ProductoDAO::findAll();
        $albaran=AlbaranDAO::findAll();

    //Modificar albaran
    }elseif (isset($_REQUEST['modificar'])) {
        $_SESSION['albaran']=$_REQUEST['idAlbaran'];
        $_SESSION['vista']=$vistas['editarAlbaran'];
        $_SESSION['controlador']=$controlador['editarAlbaran'];

    //Eliminar albaran
    }elseif (isset($_REQUEST['eliminar'])) {
        $_SESSION['albaran']=$_REQUEST['idAlbaran'];
        AlbaranDAO::delete($_SESSION['albaran']);
        $lista= ProductoDAO::findAll();
        $albaran=AlbaranDAO::findAll();

    //Comprar un producto
    }elseif (isset($_REQUEST['comprar'])){
        $producto=ProductoDAO::findById($_SESSION['producto']);
        $producto->stock=($producto->stock)-$_REQUEST['cantidad'];
        ProductoDAO::update($producto);
        $venta= new Ventas (null,$_SESSION['user'],date('Y-m-d'),$_SESSION['producto'],$_REQUEST['cantidad'],(float)(($producto->precio)*$_REQUEST['cantidad']));
        VentasDAO::insert($venta);

    //Estando en ver producto
    }elseif (isset($_SESSION['producto']) && $_SESSION['vista']==$vistas['verProducto']) {
        $jamon=ProductoDAO::findById($_SESSION['producto']);

    //Descarte
    }else{
        $lista= ProductoDAO::findAll();
        $albaran=AlbaranDAO::findAll();
    }


?>