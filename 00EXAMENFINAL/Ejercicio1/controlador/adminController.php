<?
if (isset($_REQUEST['borrar'])) {
    $_SESSION['partido'] = $_REQUEST['id'];
    $partidoBorrado = deletePartido($_REQUEST['id']);
} elseif (isset($_REQUEST['insertar'])) {
    $partidoNuevo = postPartido($_REQUEST['jug1'], $_REQUEST['jug2'], $_REQUEST['fecha'], $_REQUEST['resultado']);
    $_SESSION['vista'] = $vistas['insertar'];
    $_SESSION['controlador'] = $controladores['admin'];
} elseif (isset($_REQUEST['modificar'])) {

    $partidoModificado = putPartido($_REQUEST['id'], $_REQUEST['jug1'], $_REQUEST['jug2'], $_REQUEST['fecha'], $_REQUEST['resultado']);
    $_SESSION['vista'] = $vistas['modificar'];
    $_SESSION['controlador'] = $controladores['admin'];
} else {
    $value = get();
    $partido = json_decode($value, true);
}
