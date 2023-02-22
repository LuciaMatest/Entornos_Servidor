<?
$apuestas = ApuestaDAO::findAll();
if (!sorteo()) {
    if (isset($_REQUEST['generar'])) {
        $lista = get();
        $lista = json_decode($lista, true);
        $_SESSION['vista'] = $vistas['sorteo'];
        // $sorteo = new Sorteo(null, date('Y-m-d'), $random_array[0], $random_array[1], $random_array[2], $random_array[3], $random_array[4]);
        // if (SorteoDAO::insert($sorteo)) {
        //     //guardo la id de la apuesta para cuando quiera modificarla
        //     $_SESSION["idSorteo"] = $sorteo->id;
        // }
    } else {
        $_SESSION['error'] = 'No se puede generar los números';
    }
}
