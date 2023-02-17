<?
$apuestas = ApuestaDAO::findAll();

if (isset($_REQUEST['generar'])) {
    $numerosRandom = getApi();
    $sorteo = new Sorteo(null, date('Y-m-d'), $random_array[0], $random_array[1], $random_array[2], $random_array[3], $random_array[4]);
    if ($sorteo = SorteoDAO::insert($sorteo)) {
        $_SESSION['controlador'] = $controladores['sorteo'];
        $_SESSION['vista'] = $vistas['sorteo'];
        $sorteo = SorteoDAO::findAll();
    }
}