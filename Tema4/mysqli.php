<?php
    require('./Seguro/conexion.php');
//Conexion con funciones
try{
    $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');
    //cerrar conexion
    mysqli_close($conexion);
}catch(Exception $ex){
    echo $ex;
}


//Conexion con objetos
try{
    $conexion0 = new mysqli();
    $conexion0->connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');
    //cerrar conexion
    mysqli_close($conexion0);
}catch(Exception $ex){
    echo $ex;
}
?>