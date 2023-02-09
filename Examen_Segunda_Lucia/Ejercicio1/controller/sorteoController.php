<?
if (isset($_REQUEST['sorteo'])) {
    $sorteo = SorteoDAO::findAll();
} elseif (isset($_REQUEST['generar'])){
    
} else{
    $sorteo = SorteoDAO::findAll();
}
 