<?
    class AlbaranDAO extends FactoryBD implements DAO{

        public static function findAll(){
            $sql='select * from albaran;';
            $datos=array();
            $devuelve=parent::ejecuta($sql,$datos);
            $arrayAlbaran=array();
            while($obj= $devuelve->fetchObject()){
                $registro=new Albaran($obj->idAlbaran,$obj->fechaAlbaran,$obj->idProducto,$obj->cantidad,$obj->usuario);
                array_push($arrayAlbaran,$registro);
            }
            return $arrayAlbaran;
        }

        public static function findById($id){
            $sql='select * from albaran where idAlbaran=?;';
            $datos=array($id);
            $devuelve = parent::ejecuta($sql,$datos);
            $obj=$devuelve->fetchObject();
            if ($obj) {
                return $registro= new Albaran($obj->idAlbaran,$obj->fechaAlbaran,$obj->idProducto,$obj->cantidad,$obj->usuario);
            }else{
                return 'No existe el registro';
            }
        }

        public static function insert($objeto){
            $sql='insert into albaran values (?,?,?,?,?)';
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

        public static function delete($id){
            $sql='delete from albaran where idAlbaran=?;';
            $datos=array($id);
            $devuelve=parent::ejecuta($sql,$datos);  
            if ($devuelve->rowCount()==0){
                return false;
            }else{
                return true;
            }           
        }

        public static function update($objeto){
            $sql='update albaran set fechaAlbaran=?,idProducto=?,cantidad=?,usuario=? where idAlbaran=?';
            $datos=array($objeto->fechaAlbaran,$objeto->idProducto,$objeto->cantidad,$objeto->usuario,$objeto->idAlbaran);
            $devuelve=parent::ejecuta($sql,$datos);
            if ($devuelve->rowCount()==0){
                return false;
            }else{
                return true;
            }
        }
    }

?>