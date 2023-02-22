<?

class ApuestaDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from apuesta;';
        $datos = array();
        $devuelve = parent::ejecuta($sql, $datos);
        $arrayApuesta = array();
        while ($obj = $devuelve->fetchObject()) {
            $apuesta = new Apuesta(
                $obj->id,
                $obj->fecha,
                $obj->iduser,
                $obj->n1,
                $obj->n2,
                $obj->n3,
                $obj->n4,
                $obj->n5
            );
            array_push($arrayApuesta, $apuesta);
        }
        return $arrayApuesta;
    }

    public static function findByUserFecha($iduser, $fecha)
    {
        $sql = 'select * from apuesta where iduser=? and fecha= ?;';
        $datos = array($iduser, $fecha);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetchObject();
        if ($obj) {
            return $apuesta = new Apuesta(
                $obj->id,
                $obj->fecha,
                $obj->iduser,
                $obj->n1,
                $obj->n2,
                $obj->n3,
                $obj->n4,
                $obj->n5
            );
        } else {
            return false;
        }
    }

    public static function findById($id)
    {
        $sql = 'select * from apuesta where id=?;';
        $datos = array($id);
        $resultado = parent::ejecuta($sql, $datos);
        $objeto = $resultado->fetchObject();
        if ($objeto) {
            return $apuesta = new Apuesta(
                $objeto->id,
                $objeto->fecha,
                $objeto->iduser,
                $objeto->n1,
                $objeto->n2,
                $objeto->n3,
                $objeto->n4,
                $objeto->n5
            );
        } else {
            return 'No existe el albaran';
        }
    }
    public static function delete($id)
    {
    }
    //INSERTAR
    public static function insert($objeto)
    {
        $sql = 'insert into apuesta values (?,?,?,?,?,?,?,?)';
        $objeto = (array)$objeto;
        $datos = array();
        foreach ($objeto as $obj) {
            array_push($datos, $obj);
        }
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
    //MODIFICAR
    public static function update($objeto)
    {
        $sql = 'update apuesta set n1=?,n2=?,n3=?,n4=?,n5=? where id=?';
        $devuelve = parent::ejecuta($sql, $objeto);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
}
