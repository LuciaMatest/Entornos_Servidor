<?
$mundial = simplexml_load_file('mundial.xml');

foreach ($mundial as $equipo) {
    echo '<br>Equipo: ' . $equipo ->children()[0];
    echo ' y entrenador: ' . $equipo ->children()[1];
}

$equipo = $mundial->addChild('Equipo');
$equipo ->addChild('Nombre', 'Italia');
$equipo ->addChild('Entrenador', 'Alexandro');

$mundial->asXML('mundial2.xml');