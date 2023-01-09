<?php
require('../seguro/conexion.php');

//Buscar todos
function findAll(){
    try {
        $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD,USER,PASS);
        $sql = "select * from producto";
        $resultado=$conexion->query($sql);
        $resultado->fetchAll(PDO::FETCH_ASSOC);
        unset($conexion);
        return 
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

//Buscar por Id
function findById($id){

}
?>