<?
if (isset($_REQUEST['borrar'])) {
    $_SESSION['partido'] = $_REQUEST['id'];
    $partidoBorrado = deletePartido($_REQUEST['id']);
} elseif (isset($_REQUEST['insertar'])) {
    $_SESSION['vista'] = $vistas['insertar'];
    $_SESSION['controlador'] = $controladores['admin'];
    $partidoNuevo = postPartido($_REQUEST['jug1'], $_REQUEST['jug2'], $_REQUEST['fecha'], $_REQUEST['resultado']);
} elseif (isset($_REQUEST['modificar'])) {
    $value = get();
    $partido = json_decode($value, true);
    $_SESSION['vista'] = $vistas['modificar'];
    $_SESSION['controlador'] = $controladores['admin'];
    $partido = putPartido($_REQUEST['id'], $_REQUEST['jug1'], $_REQUEST['jug2'], $_REQUEST['fecha'], $_REQUEST['resultado']);
} else {
    $value = get();
    $partido = json_decode($value, true);
}

$value = get();
$partido = json_decode($value, true);
