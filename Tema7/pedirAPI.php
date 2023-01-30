<?
    $url='https://datos.madrid.es/egob/catalogo/300600-0-comisaria.json?distrito_nombre=VILLAVERDE';

    $datos=file_get_contents('https://datos.madrid.es/egob/catalogo/300600-0-comisaria.json?distrito_nombre=VILLAVERDE');

    if ($datos){
        $array=json_decode($datos,true);
        foreach ($array['@graph'] as $evento) {
            echo $evento['title'];
            echo "<br><br>";
        };
    }

?>