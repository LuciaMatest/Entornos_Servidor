<?
if (isset($_REQUEST['almacen'])) {
    $almacen = ProductoDAO::findAll();
} elseif (isset($_REQUEST['editar'])) {
    $_SESSION['accion'] = 'editar';
    $almacen = ProductoDAO::findById($_REQUEST['cod_producto']);
    $_SESSION['almacen'] = $_REQUEST['cod_producto'];
    $_SESSION['vista'] = $vistas['modificarProducto'];
    $_SESSION['controlador'] = $controladores['almacen'];
} elseif (isset($_REQUEST['modificar'])) {
    if (validarModAl()) {
        $almacen = ProductoDAO::findById($_REQUEST['cod_producto']);
        $almacen->nombre = $_REQUEST['nombre'];
        $almacen->descripcion = $_REQUEST['descripcion'];
        $almacen->precio = $_REQUEST['precio'];
        $almacen->stock = $_REQUEST['stock'];
        if ($almacen = ProductoDAO::update($almacen)) {
            $_SESSION['almacen'] = $_REQUEST['cod_producto'];
            $_SESSION['vista'] = $vistas['almacen'];
            $_SESSION['controlador'] = $controladores['almacen'];
            $almacen = ProductoDAO::findAll();
        }
    } else {
        $almacen = ProductoDAO::findById($_REQUEST['cod_producto']);
    }
} elseif (isset($_REQUEST['añadir'])) {
    $almacen = ProductoDAO::findById($_REQUEST['cod_producto']);
    $almacen->stock = ($almacen->stock) + (int)$_REQUEST['cantidad'];
    ProductoDAO::update($almacen);
    $nStock = new Albaran(null, date('Y-m-d'), $_REQUEST['cod_producto'], $_REQUEST['cantidad'], $_SESSION['user']);
    AlbaranDAO::insert($nStock);
    $_SESSION['vista'] = $vistas['albaran'];
    $_SESSION['controlador'] = $controladores['albaran'];
    $almacen = ProductoDAO::findAll();
    $albaran = AlbaranDAO::findAll();
} elseif (isset($_REQUEST['crear'])) {
    $_SESSION['vista'] = $vistas['modificarAñadir'];
    $_SESSION['controlador'] = $controladores['almacen'];
} elseif (isset($_REQUEST['nuevo'])) {
    if (validarAñadir()) {
        $producto = new Producto($_REQUEST['cod_producto'], $_FILES['imagen_alta']['name'], $_FILES['imagen_baja']['name'], $_REQUEST['nombre'], $_REQUEST['descripcion'], (float)$_REQUEST['precio'], $_REQUEST['stock']);
        if ($almacen = ProductoDAO::insert($producto)) {
            $_SESSION['vista'] = $vistas['almacen'];
            $_SESSION['controlador'] = $controladores['almacen'];
            $almacen = ProductoDAO::findAll();
            $albaran = AlbaranDAO::findAll();
        }
    }
} else {
    $almacen = ProductoDAO::findAll();
}
