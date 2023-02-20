<?
$apuestas = ApuestaDAO::findAll();
if (!sorteo()) {
    if (isset($_REQUEST['generar'])) {
        $numerosRandom = get();
        $numerosRandom = json_decode($numerosRandom, true);
        foreach ($numerosRandom as $value) {
            echo "<li>$value</li>" ;
        }
        // $sorteo = new Sorteo(null, date('Y-m-d'), $numerosRandom[0], $numerosRandom[1], $numerosRandom[2], $numerosRandom[3], $numerosRandom[4]);
        // if (SorteoDAO::insert($sorteo)) {
        //     $_SESSION["sorteoID"] = $sorteo->id;
        // }
    }
}
