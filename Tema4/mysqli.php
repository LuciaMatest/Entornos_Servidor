<?php
    require('./Seguro/conexion.php');
//Conexion con funciones
try{
    $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');
    //cerrar   
    mysqli_close($conexion);
}catch(Exception $ex){
    echo $ex;
    //el codigo de error con Depurar
    // if($ex->code===2002){
    //     echo " Error 2002 No se puede conectar a la base de datos";
    // }else if($ex->code==1045){
    //     echo " Error 1045 acceso denegado para usuario";
    // }
}
echo "";
?>