<?
if (isset($_REQUEST['modificar'])) {
    if (selecciona('check')) {
        $arrayCheck = $_REQUEST['check'];
        $arrayApuestas = array($_SESSION["id"], $arrayCheck[0], $arrayCheck[1], $arrayCheck[2], $arrayCheck[3], $arrayCheck[4]);
        if (ApuestaDAO::update($arrayApuestas)) {
            $_SESSION["error"] = "Se han modificado los datos";
            $_SESSION['vista'] = $vistas['apuesta'];
            $_SESSION['controlador'] = $controladores['apuesta'];
            $apuesta = ApuestaDAO::findAll();
        }
    } else {
        $_SESSION["error"] = "No has seleccionado 5 números.";
    }
} elseif (isset($_REQUEST['insertar'])) {
    if (selecciona('check')) {
        $apuesta = ApuestaDAO::findAll();
        $arrayCheck = $_REQUEST['check'];
        $apuesta = new Apuesta(null, date('Y-m-d'), $_SESSION['id'], $arrayCheck[0], $arrayCheck[1], $arrayCheck[2], $arrayCheck[3], $arrayCheck[4]);
        $apuesta = ApuestaDAO::insert($apuesta);
        $_SESSION["error"] = "Apuesta realizada";
        $_SESSION['vista'] = $vistas['apuesta'];
        $_SESSION['controlador'] = $controladores['apuesta'];
    } else {
        $_SESSION["error"] = "No has seleccionado 5 números.";
    }
}
