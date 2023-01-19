<?php
    class FactoryBD{
        public static function ejecuta($sql,$datos){
            try {
                //Los datos deben venir siempre como un array
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD,USER,PASS);
                $sql_preparada = $conexion->prepare($sql);
                $sql_preparada->execute($datos);
            } catch (Exception $ex) {
                //Si no funciona es nulo
                $sql_preparada = null;
                echo $ex;
            } finally {
                unset($conexion);
                return $sql_preparada;
            }
        }
    }
?>