<?
if (isset($_REQUEST['albaran'])) {
    $albaran = AlbaranDAO::findAll();
} elseif (isset($_REQUEST['eliminar'])) {
    $_SESSION['albaran'] = $_REQUEST['id_albaran'];
    $albaran = AlbaranDAO::delete($_REQUEST['id_albaran']);
    $albaran = AlbaranDAO::findAll();
} elseif (isset($_REQUEST['editar'])) {
    $_SESSION['accion'] = 'editar';
    $albaran = AlbaranDAO::findById($_REQUEST['id_albaran']);
    $_SESSION['albaran'] = $_REQUEST['id_albaran'];
    $_SESSION['vista'] = $vistas['modificarAlbaran'];
    $_SESSION['controlador'] = $controladores['albaran'];
} 
// elseif (isset($_REQUEST['modificar'])) {
//     $albaran = AlbaranDAO::findById($_REQUEST['id_albaran']);
//     $albaran->fecha_compra = $_REQUEST['fecha_compra'];
//     $albaran->cantidad = $_REQUEST['cantidad'];
//     $albaran->precio_total = $_REQUEST['precio_total'];
//     $albaran = AlbaranDAO::update($albaran);
//     $_SESSION['albaran'] = $_REQUEST['id_albaran'];
//     $_SESSION['vista'] = $vistas['albaran'];
//     $_SESSION['controlador'] = $controladores['albaran'];
//     $albaran = AlbaranDAO::findAll();
// }
 else {
    $albaran = AlbaranDAO::findAll();
}
