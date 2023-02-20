<?
$apuestas = ApuestaDAO::findAll();
if (!sorteo()) {
    if (isset($_REQUEST['generar'])) {
        $values = getApi();
        $random_array = json_decode($values, true);
        foreach ($random_array as $values) {
            echo '<p>Los números premiados son:</p>';
            echo '<ul class="list-group list-group-light">';
            echo '<li class="list-group-item">' . $values . '</li>';
            echo '</ul>';
        }
        $sorteo = new Sorteo(null, date('Y-m-d'), $random_array[0], $random_array[1], $random_array[2], $random_array[3], $random_array[4]);
        if (SorteoDAO::insert($sorteo)) {
            $_SESSION['vista'] = $vistas['sorteo'];
            $_SESSION['controlador'] = $controladores['sorteo'];
        }
    } else {
        $_SESSION['error'] = 'No se puede generar los números';
    }
}
