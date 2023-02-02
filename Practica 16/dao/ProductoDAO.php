<?php
    class ProductoDAO extends FactoryBD implements DAO{
        public static function findAll(){
            $sql='select * from productos;';
            $datos=array();
            $devuelve=parent::ejecuta($sql,$datos);
            $arrayProductos=array();
            while($obj= $devuelve->fetchObject()){
                $producto=new Producto($obj->idProducto,$obj->nombre,$obj->precio,$obj->descripcion,$obj->stock,$obj->url);
                array_push($arrayProductos,$producto);
            }
            return $arrayProductos;
        }

        public static function findById($id){
            $sql='select * from productos where idProducto=?;';
            $datos=array($id);
            $devuelve = parent::ejecuta($sql,$datos);
            $obj=$devuelve->fetchObject();
            if ($obj) {
                return $producto= new Producto($obj->idProducto,$obj->nombre,$obj->precio,$obj->descripcion,$obj->stock,$obj->url);
            }else{
                return 'No existe el producto';
            }
        }

        public static function delete($id){
            $sql='delete from productos where idProducto=?;';
            $datos=array($id);
            $devuelve=parent::ejecuta($sql,$datos);  
            if ($devuelve->rowCount()==0){
                return false;
            }else{
                return true;
            }           
        }

        public static function insert($objeto){
            $sql='insert into productos values (?,?,?,?,?,?)';
            $objeto=(array)$objeto;
            $datos=array();
            foreach ($objeto as $att) {
                array_push($datos,$att);
            }
            $devuelve=parent::ejecuta($sql,$datos);
            if ($devuelve->rowCount()==0){
                return false;
            }else{
                return true;
            }
        }

        public static function update($objeto){
            $sql='update productos set nombre=?,precio=?,descripcion=?,stock=? where idProducto=?';
            $datos=array($objeto->nombre,$objeto->precio,$objeto->descripcion,$objeto->stock,$objeto->idProducto);
            $devuelve=parent::ejecuta($sql,$datos);
            if ($devuelve->rowCount()==0){
                return false;
            }else{
                return true;
            }
        }
    }
?>