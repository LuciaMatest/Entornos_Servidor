<?
if (isset($_REQUEST['borrar'])) {
    if (delete($_SESSION['id'])) {
        $value = get();
        $partido = json_decode($value, true);
        $_SESSION['vista'] = $vistas['admin'];
    } else {
        $_SESSION['vista'] = $vistas['admin'];
    }
} elseif (isset($_REQUEST['insertar'])) {
    $_SESSION['vista'] = $vistas['insertar'];
    $_SESSION['controlador'] = $controladores['admin'];
    post($_REQUEST['grupo'],$_REQUEST['borrar'],$_REQUEST['borrar'],$_REQUEST['borrar']);
} elseif (isset($_REQUEST['modificar'])) {
    $value = getByIdPartido($_SESSION['id']);
    $partido = json_decode($value, true);
    $_SESSION['vista'] = $vistas['modificar'];
    $_SESSION['controlador'] = $controladores['admin'];
} else {
    $value = get();
    $partido = json_decode($value, true);
}
