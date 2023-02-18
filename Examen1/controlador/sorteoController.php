<?
$apuestas = ApuestaDAO::findAll();
if (!sorteo()){
    if (isset($_REQUEST['generar'])) {
        $numerosRandom = getApi();
        $random_array = explode(',', $numerosRandom);
        $sorteo = new Sorteo(null, date('Y-m-d'), $random_array[0], $random_array[1], $random_array[2], $random_array[3], $random_array[4]);
        if ($sorteo = SorteoDAO::insert($sorteo)) {
            $_SESSION['controlador'] = $controladores['sorteo'];
            $_SESSION['vista'] = $vistas['sorteo'];
            $sorteo = SorteoDAO::findAll();
        }
    }
}