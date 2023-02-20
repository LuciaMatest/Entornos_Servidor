<?
$apuestas = ApuestaDAO::findAll();
if (!sorteo()){
    if (isset($_REQUEST['generar'])) {
        $numerosRandom = getApi();
        $random_array = explode(',', $numerosRandom);
        $sorteosTotal = sorteoDAO::findAll();
        $sorteo = new Sorteo(count($sorteosTotal) + 1, date('Y-m-d'), $random_array[0], $random_array[1], $random_array[2], $random_array[3], $random_array[4]);
        if (SorteoDAO::insert($sorteo)) {
            $_SESSION["sorteoID"] = $sorteo->id;
        }
    }
}