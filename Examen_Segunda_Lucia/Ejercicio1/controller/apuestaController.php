<?
if(isset($_REQUEST['modificar'])){
    $apuesta = ApuestaDAO::findById($_REQUEST['id']);
    $apuesta->n1 = $_REQUEST['n1'];
    $apuesta->n2 = $_REQUEST['n2'];
    $apuesta->n3 = $_REQUEST['n3'];
    $apuesta->n4 = $_REQUEST['n4'];
    $apuesta->n5 = $_REQUEST['n5'];
    $apuesta = ApuestaDAO::update($apuesta);
    $_SESSION['vista'] = $vistas['apuesta'];
    $_SESSION['controlador'] = $controladores['apuesta'];
    $apuesta = ApuestaDAO::findAll();
} elseif(isset($_REQUEST['insertar'])){
    $apuesta = new Apuesta(null, date('Y-m-d'),$_SESSION['iduser'],$_REQUEST['n1'],$_REQUEST['n2'],$_REQUEST['n3'],$_REQUEST['n4'],$_REQUEST['n5']);
    $apuesta = ApuestaDAO::insert($apuesta);
    if (selecciona('check')){
        'Debe seleccionar 5 números';
    }
    $_SESSION['vista'] = $vistas['apuesta'];
    $_SESSION['controlador'] = $controladores['apuesta'];
    $apuesta = ApuestaDAO::findAll();
}