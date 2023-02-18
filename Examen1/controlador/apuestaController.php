<?
if (isset($_REQUEST['modificar'])) {
    if (selecciona('check')) {
        $arrayCheck = $_REQUEST['check'];
        $apuesta=new Apuesta(null, null, $_SESSION["iduser"], $arrayCheck[0], $arrayCheck[1], $arrayCheck[2], $arrayCheck[3], $arrayCheck[4]);
        if (ApuestaDAO::update($apuesta)) {
            $apuesta= ApuestaDAO::findByIdFecha($_SESSION['id'],date('Y-m-d'));
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
        $apuesta = new Apuesta(null, date('Y-m-d'), $_SESSION['id'], $arrayCheck[0], $arrayCheck[1], $arrayCheck[2], $arrayCheck[3], $arrayCheck[4]);
        if ($apuesta = ApuestaDAO::insert($apuesta)) {
            // $_SESSION["acierto"] = "<span style='color:brown'>Apuesta realizada</span>";
            $_SESSION['controlador'] = $controladores['sorteo'];
            $_SESSION['vista'] = $vistas['apuesta'];
            $apuesta = ApuestaDAO::findAll();
        }
    } else {
        $_SESSION["error"] = "<span style='color:brown'>No has seleccionado 5 números.</span>";
    }
}