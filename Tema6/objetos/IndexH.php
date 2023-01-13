<?php
require_once('./Alumno.php');
require_once('./Abstracta.php');
require_once('./AbstH1.php');
require_once('./AbstH2.php');

$a = new Alumno('lucia', 28, 'lucia@gmail.com','DAW');
echo $a;
$a->darBaja();
echo $a;

// $nueva = new Abstracta();
$nueva = new AbstH2();
$nueva->muestra();
echo '<br>';
$nueva->soy();
echo '<br>';
$nueva->soy2();
?>