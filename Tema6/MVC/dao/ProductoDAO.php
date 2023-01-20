<?php
    class ProductoDAO extends FactoryBD implements DAO{
        public static function findAll(){
            $sql = 'select * from producto;';
            $datos = array();
            $resultado = parent::ejecuta($sql,$datos);
            $arrayProducto = array();
            while ($row = $resultado->fetchObject()) {
                $producto = new Producto(
                    $row->codProd,
                    $row->nombre,
                    $row->descripcion,
                    $row->precio,
                    $row->stock,
                    $row->img
                );
                array_push($arrayProducto,$usuario);
            }
            return $arrayProducto;
        }

        public static function findById($id){
            $sql = 'select * from producto where codProd=?;';
            $datos = array($id);
            $resultado = parent::ejecuta($sql,$datos);
            $row = $resultado->fetchObject();
            if ($row) {
                return $producto = new Producto(
                    $row->codProd,
                    $row->nombre,
                    $row->descripcion,
                    $row->precio,
                    $row->stock,
                    $row->img
                );
            } else {
                return 'No existe el producto';
            }
        }

        public static function update($objeto){
            $actualiza = 'update producto set nombre=?,descripcion=?,precio=?,stock=?,img=? where codProd=?;';
            $datos = array(
                $objeto->nombre,
                $objeto->descripcion,
                $objeto->precio,
                $objeto->stock,
                $objeto->img,
                $objeto->codProd
            );
            $resultado = parent::ejecuta($actualiza,$datos);
            if ($resultado->rowCount() == 0) {
                return false;
            } else {
                return true;
            }
        }

        public static function insert($objeto){
            $inserta = "insert into producto values (?,?,?,?,?);";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $att) {
                array_push($datos,$att);
            }
            $resultado = parent::ejecute($inserta,$datos);
            if ($resultado->rowCount() == 0) {
                return false;
            } else {
                return true;
            }

        }

        public static function delete($id){
            $elimina = "delete from producto where codProd=?;";
            $datos = array($id);
            $resultado = parent::ejecuta($elimina,$datos);
            if ($resultado->rowCount() == 0) {
                return 'No se ha borrado';
            } else {
                return 'Se ha borrado correctamente';
            }
            
        }
    }
?>