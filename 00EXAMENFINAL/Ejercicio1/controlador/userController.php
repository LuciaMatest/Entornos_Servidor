<?
//mostrara todo aquel partido en el que aparezca su id como jugador dando igual si es jugador 1 o jugador 2
$value = getById($_SESSION['id']);
$partido = json_decode($value, true);
