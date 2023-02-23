<?
if (isset($_REQUEST['borrar'])) {
    $_SESSION['partido'] = $_REQUEST['id'];
    if (deletePartido($_REQUEST['id'])) {
        $value = get();
        $partido = json_decode($value, true);
        $_SESSION['vista'] = $vistas['admin'];
    }
} elseif (isset($_REQUEST['insertar'])) {
    $_SESSION['vista'] = $vistas['insertar'];
    if (postPartido($_REQUEST['jug1'], $_REQUEST['jug2'], $_REQUEST['fecha'], $_REQUEST['resultado'])) {
        $value = get();
        $partido = json_decode($value, true);
    }
} elseif (isset($_REQUEST['modificar'])) {

    $partidoModificado = putPartido($_REQUEST['id'], $_REQUEST['jug1'], $_REQUEST['jug2'], $_REQUEST['fecha'], $_REQUEST['resultado']);
    $_SESSION['vista'] = $vistas['modificar'];
    $_SESSION['controlador'] = $controladores['admin'];
} else {
    $value = get();
    $partido = json_decode($value, true);
}
