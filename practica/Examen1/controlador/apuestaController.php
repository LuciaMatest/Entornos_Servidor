<?
if (isset($_REQUEST['modificar'])) {
    if (selecciona('check')) {
        $arrayCheck = $_REQUEST['check'];
        $arrayDatos = array($arrayCheck[0], $arrayCheck[1], $arrayCheck[2], $arrayCheck[3], $arrayCheck[4], $_SESSION["idApuesta"]);
        if (ApuestaDAO::update($arrayDatos)) {
            $_SESSION["modificado"] = "<span style='color:brown'>Apuesta modificada</span>";
        }
    } else {
        $_SESSION["error"] = "<span style='color:brown'>No has seleccionado 5 números.</span>";
    }
} elseif (isset($_REQUEST['insertar'])) {
    if (selecciona('check')) {
        $arrayCheck = $_REQUEST['check'];
        $apuestasTotal = ApuestaDAO::findAll();
        $apuesta = new Apuesta(count($apuestasTotal) + 1, date('Y-m-d'), $_SESSION['iduser'], $arrayCheck[0], $arrayCheck[1], $arrayCheck[2], $arrayCheck[3], $arrayCheck[4]);
        if (ApuestaDAO::insert($apuesta)) {
            //guardo la id de la apuesta para cuando quiera modificarla
            $_SESSION["idApuesta"] = $apuesta->id;
            $_SESSION["acierto"] = "<span style='color:brown'>Apuesta realizada</span>";
        }
    } else {
        $_SESSION["error"] = "<span style='color:brown'>No has seleccionado 5 números.</span>";
    }
}
