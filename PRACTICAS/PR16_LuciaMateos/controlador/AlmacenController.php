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
} elseif (isset($_REQUEST['crear'])) {
} else {
    $almacen = ProductoDAO::findAll();
}
