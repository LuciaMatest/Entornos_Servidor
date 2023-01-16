<?php
require_once ("FactoryBD.php");

class UsuarioDAO extends FactoryBD implements DAO{

    public static function findAll(){
        $sql= "select * from usuarios;";
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);


    }

    public static function findId($id){

    }

    public static function delete($id){

    }

    public static function insert(){

    }

    public static function update($id,$objeto){

    }




    
}

?>