<?

class SorteoDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from sorteo;';
        $datos = array();
        $devuelve = parent::ejecuta($sql, $datos);
        $arraySorteo = array();
        while ($obj = $devuelve->fetchObject()) {
            $sorteo = new Sorteo(
                $obj->id,
                $obj->fecha,
                $obj->n1,
                $obj->n2,
                $obj->n3,
                $obj->n4,
                $obj->n5,
            );
            array_push($arraySorteo, $sorteo);
        }
        return $arraySorteo;
    }

    public static function findByFecha($objeto)
    {
        $sql = 'select * from sorteo where fecha=?;';
        $datos = array($objeto);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetchObject();
        if ($obj) {
            return $sorteo = new Sorteo(
                $obj->id,
                $obj->fecha,
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
    }
    public static function delete($id)
    {
    }
    //INSERTAR
    public static function insert($objeto)
    {
        $sql = 'insert into sorteo values (null,current_date,?,?,?,?,?)';
        $datos = array(
            $objeto->n1,
            $objeto->n2,
            $objeto->n3,
            $objeto->n4,
            $objeto->n5
        );
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
        $sql = 'update sorteo set fecha=?,n1=?,n2=?,n3=?,n4=?,n5=? where id=?';
        $datos = array(
            $objeto->fecha,
            $objeto->n1,
            $objeto->n2,
            $objeto->n3,
            $objeto->n4,
            $objeto->n5,
            $objeto->id
        );
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
}
