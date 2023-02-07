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
    $almacen = ProductoDAO::findById($_REQUEST['cod_producto']);
    $almacen->imagen_alta = $_REQUEST['imagen_alta'];
    $almacen->imagen_baja = $_REQUEST['imagen_baja'];
    $almacen->nombre = $_REQUEST['nombre'];
    $almacen->descripcion = $_REQUEST['descripcion'];
    $almacen->precio = $_REQUEST['precio'];
    $almacen->stock = $_REQUEST['stock'];
    $almacen = ProductoDAO::update($almacen);
    $_SESSION['almacen'] = $_REQUEST['cod_producto'];
    $_SESSION['vista'] = $vistas['almacen'];
    $_SESSION['controlador'] = $controladores['almacen'];
    $almacen = ProductoDAO::findAll();
} elseif (isset($_REQUEST['añadir'])) {
    $almacen = ProductoDAO::findById($_REQUEST['cod_producto']);
    $almacen->stock = ($almacen->stock) + (int)$_REQUEST['cantidad'];
    ProductoDAO::update($almacen);
    $almacen = ProductoDAO::findAll();
    $_SESSION['vista'] = $vistas['albaran'];
    $_SESSION['controlador'] = $controladores['albaran'];
    $albaran = AlbaranDAO::findAll();
} elseif (isset($_REQUEST['crear'])) {
    $_SESSION['vista'] = $vistas['modificarAñadir'];
    $_SESSION['controlador'] = $controladores['almacen'];
} elseif (isset($_REQUEST['nuevo'])) {
    $producto = new Producto($_REQUEST['cod_producto'], './webroot/imagen' . $_FILES['imagen_alta']['name'], './webroot/imagen' . $_FILES['imagen_baja']['name'], $_REQUEST['nombre'], $_REQUEST['descripcion'], (float)$_REQUEST['precio'], $_REQUEST['stock']);
    $almacen = ProductoDAO::insert($producto);
    $_SESSION['vista'] = $vistas['almacen'];
    $_SESSION['controlador'] = $controladores['almacen'];
    $almacen = ProductoDAO::findAll();
} else {
    $almacen = ProductoDAO::findAll();
}
