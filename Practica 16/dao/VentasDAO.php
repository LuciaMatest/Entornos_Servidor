<?
    class VentasDAO extends FactoryBD implements DAO
    {
       public static function findAll(){
            $sql='select * from ventas;';
            $datos=array();
            $devuelve=parent::ejecuta($sql,$datos);
            $arrayVentas=array();
            while($obj= $devuelve->fetchObject()){
                $venta=new Ventas($obj->idVenta,$obj->cliente,$obj->fechaVent,$obj->idProducto,$obj->cantidad,$obj->precioTotal);
                array_push($arrayVentas,$venta);
            }
            return $arrayVentas;
        } 

        public static function findById($id){
            $sql='select * from ventas where idVenta=?;';
            $datos=array($id);
            $devuelve = parent::ejecuta($sql,$datos);
            $obj=$devuelve->fetchObject();
            if ($obj) {
                return $venta= new Ventas($obj->idVenta,$obj->cliente,$obj->fechaVent,$obj->idProducto,$obj->cantidad,$obj->precioTotal);
            }else{
                return 'No existe la venta';
            }
        }

        public static function delete($id){
            $sql='delete from ventas where idVenta=?;';
            $datos=array($id);
            $devuelve=parent::ejecuta($sql,$datos);  
            if ($devuelve->rowCount()==0){
                return false;
            }else{
                return true;
            }           
        }

        public static function insert($objeto){
            $sql='insert into ventas values (?,?,?,?,?)';
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
            $sql='update ventas set cliente=?,fechaVent=?,idProducto=?,cantidad=?,precioTotal=? where idVenta=?';
            $datos=array($objeto->cliente,$objeto->fechaVent,$objeto->idProducto,$objeto->cantidad,$objeto->precioTotal,$objeto->idVenta);
            $devuelve=parent::ejecuta($sql,$datos);
            if ($devuelve->rowCount()==0){
                return false;
            }else{
                return true;
            }
        }

    }
    
?>