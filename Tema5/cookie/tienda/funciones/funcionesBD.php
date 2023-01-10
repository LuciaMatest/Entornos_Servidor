<?php
//Buscar todos
function findAll(){
    try {
        $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD,USER,PASS);
        $sql = "select * from producto";
        $resultado=$conexion->query($sql);
        $array=$resultado->fetchAll(PDO::FETCH_ASSOC);
        unset($conexion);
        return $array;
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
        return false;
    }
}

//Buscar por Id
function findById($id){
    try {
        $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD,USER,PASS);
        $sql = "select * from producto where codigo = ?";
        $sql_preparada=$conexion->prepare($sql);
        $resultado=$sql_preparada->execute($array($id));
        if ($resultado) {
            $producto = $sql_preparada->fetchAll();
            unset($conexion);
            return $producto;
        } else {
            return false;
            unset($conexion);
        }
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
        return false;
    }
}
?>