<?
require_once './dao/FactoryBD.php';
require_once './dao/DAO.php';

class ConciertoDAO extends FactoryBD implements DAO
{

    public static function findAll()
    {
        $sql = 'select * from conciertos';
        $datos = array();
        $devuelve = parent::ejecuta($sql, $datos);
        $arrayCociertos = array();
        while ($obj = $devuelve->fetchObject()) {
            $concierto = new Concierto($obj->grupo, $obj->fecha, $obj->precio, $obj->lugar);
            array_push($arrayCociertos, $concierto);
        }
        return $arrayCociertos;
    }

    public static function findById($id)
    {
        $sql = 'select * from conciertos where id=?';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetchObject();
        if ($obj) {
            return $concierto = new Concierto($obj->grupo, $obj->fecha, $obj->precio, $obj->lugar);
        } else {
            return 'No existe el producto';
        }
    }

    public static function delete($id)
    {
        $sql = 'delete from conciertos where id=?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function insert($objeto)
    {
        $sql = 'insert into conciertos values (null,?,?,?,?)';
        $objeto = (array)$objeto;
        $datos = array();
        foreach ($objeto as $att) {
            array_push($datos, $att);
        }
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function update($obj)
    {
        $sql = 'update conciertos set grupo=?,fecha=?,precio=?,lugar=? where id=?';
        $datos = array($obj->grupo, $obj->fecha, $obj->precio, $obj->lugar, $obj->id);
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
}
