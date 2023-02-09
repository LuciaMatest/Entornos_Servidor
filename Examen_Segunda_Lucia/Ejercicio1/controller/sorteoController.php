<?
if (isset($_REQUEST['sorteo'])) {
    $sorteo = SorteoDAO::findAll();
} 
