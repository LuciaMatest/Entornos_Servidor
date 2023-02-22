<?
$apuestas = ApuestaDAO::findAll();
if (!sorteo()) {
    if (isset($_REQUEST['generar'])) {
        $values = getApi();
        $sorteo = new Sorteo(null, date('Y-m-d'), $values[0], $values[1], $values[2], $values[3], $values[4]);
        if (SorteoDAO::insert($sorteo)) {
            //guardo la id de la apuesta para cuando quiera modificarla
            $_SESSION["idSorteo"] = $sorteo->id;
        }
    } else {
        $_SESSION['error'] = 'No se puede generar los números';
    }
}
