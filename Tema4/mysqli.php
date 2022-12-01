<?php
    require('./Seguro/conexion.php');
try{
    $conexion= mysqli_connect(HOST,USER,PASS);
}catch(Exception $ex){
    echo $ex;
    if($ex->code==2002){
        echo " Error 2002 No se puede conectar a la base de datos";
    }else if($ex->code==1045){
        echo " Error 1045 acceso denegado para usuario";
    }
}
echo "";
?>