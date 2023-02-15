<?
$conexion = curl_init();
$url = 'http://dataservice.accuweather.com/locations/v1/cities/search?apikey=4epgPXZUKS8zBKAg2K3ozQx6O5vOAzOl&q=' . $_REQUEST['ciudad'] . '%20Castilla%20y%20Le%C3%B3n&language=es';
curl_setopt($conexion, CURLOPT_URL, $url);
curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

$resultado1 = curl_exec($conexion);
$ciudad = json_decode($resultado1, true);

$url2 = 'http://dataservice.accuweather.com/forecasts/v1/daily/5day/'.$ciudad[0]['Key'].'?apikey=4epgPXZUKS8zBKAg2K3ozQx6O5vOAzOl&language=es';
curl_setopt($conexion, CURLOPT_URL, $url2);
curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

$resultado2 = curl_exec($conexion);
$tiempo = json_decode($resultado2, true);

curl_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title><? echo $_REQUEST['ciudad'] ?></title>
</head>

<body>
    <header>
        <div class="p-4 text-center">
            <a href="./tiempo.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cloud-sun-fill" viewBox="0 0 16 16">
                    <path d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z" />
                    <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                </svg>
            </a>
            <h1 class="mb-3">El tiempo</h1>
        </div>
    </header>
    <main class="border-top border-secondary">
        <h2 class="text-center mt-4">Tiempo en <? echo $_REQUEST['ciudad'] ?></h2>
        <table class="table table-success table-striped text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miercoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>
                    <th scope="col">Sábado</th>
                    <th scope="col">Domingo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Máxima temperatura</td>
                    <? foreach ($tiempo['DailyForecasts'] as $evento) {
                        $temperatura = $evento['Temperature']['Maximum']['Value']; ?>
                        <td><? $temperatura ?></td>
                    <? }; ?>
                </tr>
                <tr>
                    <td>Mínima temperatura</td>
                    <? foreach ($tiempo['DailyForecasts'] as $evento) {
                        $temperatura = $evento['Temperature']['Minimum']['Value']; ?>
                        <td><? $temperatura ?></td>
                    <? }; ?>
                </tr>
                <tr>
                    <td>Precipitaciones Día</td>
                    <? foreach ($tiempo['DailyForecasts'] as $evento) {
                        $precipitaciones = $evento['Day']['HasPrecipitation'];
                        if ($precipitaciones == null) {
                            echo "<td>NO</td>";
                        } else {
                            echo "<td>YES</td>";
                        }
                    }; ?>
                </tr>
                <tr>
                    <td>Precipitaciones Noche</td>
                    <? foreach ($tiempo['DailyForecasts'] as $evento) {
                        $precipitaciones = $evento['Night']['HasPrecipitation'];
                        if ($precipitaciones == null) {
                            echo "<td>NO</td>";
                        } else {
                            echo "<td>YES</td>";
                        }
                    }; ?>
                </tr>
            </tbody>
        </table>
    </main>
    <pre>
        <?
        print_r($tiempo);
        ?>
    </pre>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>