<?
if (isset($_REQUEST['albaran'])) {
    $albaran = AlbaranDAO::findAll();
} elseif (isset($_REQUEST['eliminar'])) {
    $_SESSION['albaran'] = $_REQUEST['id_albaran'];
    AlbaranDAO::delete($_SESSION['albaran']);
    $albaran = AlbaranDAO::findAll();
} elseif (isset($_REQUEST['modificar'])) {
    $_SESSION['albaran'] = $_REQUEST['id_albaran'];
    $_SESSION['vista'] = $vistas['modificarAlbaran'];
    $_SESSION['controlador'] = $controlador['albaran'];
} elseif (isset($_REQUEST['id_albaran'])) {
    $_SESSION['producto'] = $_REQUEST['id_albaran'];
    $albaran = AlbaranDAO::findById($_REQUEST['id_albaran']);
    $_SESSION['vista'] =  $vistas['verProducto'];
} else {
    $albaran = AlbaranDAO::findAll();
}
