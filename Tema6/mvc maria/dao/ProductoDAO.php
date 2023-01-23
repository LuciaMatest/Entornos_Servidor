<?

class ProductoDAO extends FactoryBD implements DAO{
    public static function findAll(){
        $sql = 'select * from producto;';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayProductos = array();
        while($obj = $devuelve->fetchObject()){         
            $producto = new Producto($obj->codProd, $obj->nombre, $obj->descripcion,$obj->precio, $obj->stock,$obj->img);
            array_push($arrayProductos,$producto);
        }
        return $arrayProductos;

    }
    public static function findById($id){
        $sql = 'select * from producto where codProd = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $producto = new Producto($obj->codProd, $obj->nombre, $obj->descripcion,$obj->precio, $obj->stock,$obj->img);
            return $producto;
        }  
        return null;
    }
    public static function delete($id){
        $sql = 'delete from producto where codProd = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }
    public static function insert($objeto){
        $sql = 'insert into producto values(?,?,?,?,?,?)';
        $objeto = (array)$objeto;
        $datos = array();
        foreach($objeto as $att){
            array_push($datos,$att); 
        }
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }
    public static function update($objeto){
        $sql = 'update producto set descripcion = ?,nombre = ?,precio = ?,stock=?,img=? where codProd = ? ';
        $datos = array($objeto->descripcion,$objeto->nombre,$objeto->precio,$objeto->stock,$objeto->img,$objeto->codProd);
        $devuelve = parent::ejecuta($sql,$datos); 
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }
}