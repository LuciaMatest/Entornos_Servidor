<?php
require('./Seguro/conexion.php');


//Conexion query
// try{
//     $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
//     // echo $conexion->getAttribute(PDO::ATTR_SERVER_INFO);
//     // echo $conexion->getAttribute(PDO::ATTR_CLIENT_VERSION);
//     echo "Conexion correcta";
//     $sql= " select * from equipo ";
//     $resultado=$conexion->query($sql);
//     echo "<br> Numero de equipos ".$resultado->rowCount();
//     while($row =$resultado->fetch(PDO::FETCH_BOTH)){
//         echo "<pre>";
//         print_r($row);
//         echo "</pre>";
//     }
// }catch(Exception $ex){
//     echo "Error:";
//     print_r($ex);
// }finally{
//     unset($conexion);
// }

//Conexion exec
// try{
//     $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
//     // echo $conexion->getAttribute(PDO::ATTR_CLIENT_VERSION);
//     echo "Conexion correcta";
//     $sql= "insert into equipo values(7,'Brasil'),(8,'Portugal')";
//     $numero=$conexion->exec($sql);
//     echo '<br>Se ha insertado ' .$numero;
// }catch(Exception $ex){
//     echo "Error:";
//     print_r($ex);
// }finally{
//     unset($conexion);
// }


//Consultas preparadas sin array
// try{
//     $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
//     echo "Conexion correcta";
//     $sql= "insert into equipo values(?,?)";
//     $consulta = $conexion->prepare($sql);
//     $id = 9;
//     $nombre = "Argentina";
//     $consulta->bindParam(1,$id);
//     $consulta->bindParam(2,$nombre);
//     $consulta->execute();
// }catch(Exception $ex){
//     echo "Error:";
//     print_r($ex);
// }finally{
//     unset($conexion);
// }
//Consultas preparadas con array
// try{
//     $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
//     echo "Conexion correcta";
//     $sql= "insert into equipo values(?,?)";
//     $consulta = $conexion->prepare($sql);
//     $array = array(10,"China");
//     $consulta->execute($array);
// }catch(Exception $ex){
//     echo "Error:";
//     print_r($ex);
// }finally{
//     unset($conexion);
// }
//Consultas preparadas por nombres
// try{
//     $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
//     echo "Conexion correcta";
//     $sql= "insert into equipo values(:id,:nombre)";
//     $consulta = $conexion->prepare($sql);
//     //no afecta el orden en el que introducimos los datos ya que estan definidos
//     $array = array(':id'=>11,':nombre'=>"Australia");
//     $consulta->execute($array);
// }catch(Exception $ex){
//     echo "Error:";
//     print_r($ex);
// }finally{
//     unset($conexion);
// }
//Consultas preparadas SELECT
// try{
//     $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
//     echo "Conexion correcta";
//     $sql= "select * from equipo where id = :id";
//     $consulta = $conexion->prepare($sql);
//     $array = array(':id'=>1);
//     $consulta->execute($array);
//     //insertar en variables
//     $consulta->bindColumn(1,$id);
//     $consulta->bindColumn(2,$nombre);
//     while($row = $consulta->fetch(PDO::FETCH_BOUND)){
//         echo '<br>' .$id. ' : '.$nombre;
//     }
// }catch(Exception $ex){
//     echo "Error:";
//     print_r($ex);
// }finally{
//     unset($conexion);
// }
//Consultas preparadas SELECT
try{
    $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD, USER, PASS);
    echo "Conexion correcta";
    $sql= "select * from equipo where nombre like :nombre";
    $consulta = $conexion->prepare($sql);
    //todo nombre que tenga na 
    $array = array(':nombre'=>'%na%');
    $consulta->execute($array);
    //insertar en variables
    $consulta->bindColumn(1,$id);
    $consulta->bindColumn(2,$nombre);
    while($row = $consulta->fetch(PDO::FETCH_BOUND)){
        echo '<br>' .$id. ' : '.$nombre;
    }
}catch(Exception $ex){
    echo "Error:";
    print_r($ex);
}finally{
    unset($conexion);
}
?>