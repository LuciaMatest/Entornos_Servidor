<?
    if (isset($_REQUEST['ventas'])) {
        $ventas=VentasDAO::findAll();
    }elseif (isset($_REQUEST['eliminar'])) {
        VentasDAO::delete($_REQUEST['id_ventas']);
    }else{
        $ventas=VentasDAO::findAll();
    }
?>