<?php
require('./Seguro/conexion.php');


//Conexion query
try{
    $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
    // echo $conexion->getAttribute(PDO::ATTR_SERVER_INFO);
    // echo $conexion->getAttribute(PDO::ATTR_CLIENT_VERSION);
    echo "Conexion correcta";
    $sql= " select * from equipo ";
    $resultado=$conexion->query($sql);
    echo "<br> Numero de equipos ".$resultado->rowCount();
    while($row =$resultado->fetch(PDO::FETCH_BOTH)){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
}catch(Exception $ex){
    echo "Error:";
    print_r($ex);
}finally{
    unset($conexion);
}

//Conexion exec
try{
    $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
    // echo $conexion->getAttribute(PDO::ATTR_CLIENT_VERSION);
    echo "Conexion correcta";
    $sql= " select * from equipo ";
    
}catch(Exception $ex){
    echo "Error:";
    print_r($ex);
}finally{
    unset($conexion);
}

?>