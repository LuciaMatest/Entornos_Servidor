<?
if (isset($_REQUEST['albaran'])) {
    $albaran = AlbaranDAO::findAll();
} elseif (isset($_REQUEST['eliminar'])) {
    $_SESSION['producto'] = $_REQUEST['id_albaran'];
    $albaran = AlbaranDAO::delete($_REQUEST['id_albaran']);
    $listaProducto = AlbaranDAO::findAll();
} elseif (isset($_REQUEST['editar'])) {
    $_SESSION['producto'] = $_REQUEST['id_albaran'];
    $albaran = AlbaranDAO::findById($_REQUEST['id_albaran']);
    $_SESSION['vista'] =  $vistas['modificarAlbaran'];
} elseif (isset($_REQUEST['id_albaran'])) {
    $_SESSION['producto'] = $_REQUEST['id_albaran'];
    $albaran = AlbaranDAO::findById($_REQUEST['id_albaran']);
    $_SESSION['vista'] =  $vistas['verProducto'];
}
