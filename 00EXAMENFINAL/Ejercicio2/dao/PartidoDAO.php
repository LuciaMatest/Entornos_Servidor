<?
require_once './dao/FactoryBD.php';
require_once './dao/DAO.php';

class PartidoDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from partido';
        $datos = array();
        $devuelve = parent::ejecuta($sql, $datos);
        $arrayPartidos = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arrayPartidos;
    }

    public static function findById($id)
    {
        $sql = 'select * from partido where id=?';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetch(PDO::FETCH_ASSOC);
        if ($obj) {
            return $obj;
        } else {
            return 'No existe el partido';
        }
    }

    public static function findByIdUser($jug)
    {
        $sql = 'select * from partido where jug1=? or jug2=?';
        $datos = array($jug);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetch(PDO::FETCH_ASSOC);
        if ($obj) {
            return $obj;
        } else {
            return 'No existe el partido';
        }
    }

    public static function insert($objeto)
    {
        $sql = 'insert into partido values (?,?,?,?,?)';
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

    public static function update($objeto)
    {
        $sql = 'update partido set jug1=?,jug2=?,fecha=?,resultado=? where id=?';
        $datos = array($objeto->jug1, $objeto->jug2, $objeto->fecha, $objeto->resultado, $objeto->id);
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function delete($id)
    {
        $sql = 'delete from partido where id=?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
}
