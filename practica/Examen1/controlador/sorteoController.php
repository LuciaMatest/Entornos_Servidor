<?
if (!sorteo()) {
    $apuestas = ApuestaDAO::findAll();
    if (isset($_REQUEST['generar'])) {
        $values = get();
        $random_array = json_decode($values, true);
        $sorteo = new Sorteo(null, date('Y-m-d'), $random_array[0], $random_array[1], $random_array[2], $random_array[3], $random_array[4]);
        if (SorteoDAO::insert($sorteo)) {
            //guardo la id de la apuesta para cuando quiera modificarla
            $_SESSION["idSorteo"] = $sorteo->id;
        }
    } else {
        $_SESSION['error'] = 'No se puede generar los números';
    }
} else {
    $apuestas = ApuestaDAO::findAll();
}
