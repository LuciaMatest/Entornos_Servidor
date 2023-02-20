<?
if (isset($_REQUEST['modificar'])) {
    if (selecciona('check')) {
        $arrayCheck = $_REQUEST['check'];
        $arrayDatos = array($arrayCheck[0], $arrayCheck[1], $arrayCheck[2], $arrayCheck[3], $arrayCheck[4], $_SESSION["id"]);
        if (ApuestaDAO::update($arrayDatos)) {
            $_SESSION['controlador'] = $controladores['apuesta'];
            $_SESSION['vista'] = $vistas['apuesta'];
            $_SESSION['pagina'] = 'Apuesta';
        }
    } else {
        $_SESSION["error"] = "<span style='color:brown'>No has seleccionado 5 números.</span>";
    }
} elseif (isset($_REQUEST['insertar'])) {
    if (selecciona('check')) {
        $arrayCheck = $_REQUEST['check'];
        $apuestasTotal = ApuestaDAO::findAll();
        $apuesta = new Apuesta(count($apuestasTotal) + 1, date('Y-m-d'), $_SESSION['iduser'], $arrayCheck[0], $arrayCheck[1], $arrayCheck[2], $arrayCheck[3], $arrayCheck[4]);
        if ($apuesta = ApuestaDAO::insert($apuesta)) {
            $_SESSION["acierto"] = true;
            $_SESSION['controlador'] = $controladores['apuesta'];
            $_SESSION['vista'] = $vistas['apuesta'];
            $_SESSION['pagina'] = 'Apuesta';
        }
    } else {
        $_SESSION["error"] = "<span style='color:brown'>No has seleccionado 5 números.</span>";
    }
}
