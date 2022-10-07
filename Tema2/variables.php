<!-- <?php
    include("./index.html");
?> -->
<h2>Valor y Referencia</h2>
<?php
//Por valor
$var = 1;
$var1=  $var;
echo $var . "<br>";
echo $var1 . "<br>";
$var1 = $var1 + 1;
echo $var . "<br>";
echo $var1 . "<br>";

//Por referencia
$var = 1;
$var1=  &$var;
echo $var . "<br>";
echo $var1 . "<br>";
$var1 = $var1 + 1;
echo $var . "<br>";
echo $var1 . "<br>";
?>

<h2>Ambito de las variables</h2>
<?php
//Usamos el mismo nombre en local y global
$global = 1;
function cambio(){
    $global = 2;
    echo "El valor de global dentro de la funcion es " .$global;
}
cambio();
echo "<br>El valor de global es " .$global;

//Vamos a intentar usar la misma variable
$global = 1;
function cambio2(){
    global $global;
    $local = $global;
    echo "<br>El valor de global dentro de la funcion es " .$local;
}
cambio2();
echo "<br>El valor de global es " .$global;
?>

<h2>Variables estaticas</h2>
<?php
//crear variables de funcion
function crearCoches(){
    static $numeroVecesCreada=0;
    $numeroVecesCreada = $numeroVecesCreada + 1;
    echo "<br>Ha sido creado un coche";
    echo "<br>Llevo creados " .$numeroVecesCreada;
}
crearCoches();
crearCoches();
?>

<h2>Constantes</h2>
<?php
include("./constantes.php");
echo "Al usuario " .USER. " le gusta el número " .PI;
?>

<h2>Variables especiales</h2>
<?php
echo "<pre>";
var_dump($_SERVER);
echo "<pre>";
var_dump($_GET);
echo "<pre>";
var_dump($_POST);
echo "<pre>";
var_dump($_REQUEST);
echo "<pre>";
var_dump(getenv());
var_dump($_COOKIE);
echo "<pre>";
var_dump($_FILES);
echo "<pre>";
session_start();
var_dump($_SESSION);
?>