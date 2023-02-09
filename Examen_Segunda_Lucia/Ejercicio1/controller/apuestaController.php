<?
if(isset($_REQUEST['modificar'])){
    $apuesta = ApuestaDAO::findById($_REQUEST['id']);
    $apuesta->
    $_SESSION['vista'] = $vistas['apuesta'];
    $_SESSION['controlador'] = $controladores['apuesta'];
    $apuesta = ApuestaDAO::findAll();
}