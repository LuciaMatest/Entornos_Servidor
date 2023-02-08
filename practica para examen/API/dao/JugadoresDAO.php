<?
require_once './dao/DAO.php';
require_once './dao/FactoryBD.php';

class JugadoresDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from jugadores';
        $datos = array();
        $devuelve = parent::ejecuta($sql, $datos);
        $arrayCociertos = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arrayCociertos;
    }

    public static function findById($id)
    {
        $sql = 'select * from jugadores where idJugador=?';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetch(PDO::FETCH_ASSOC);
        if ($obj) {
            return $obj;
        } else {
            return 'No existe el jugador';
        }
    }

    public static function delete($id)
    {
        $sql = 'delete from jugadores where idJugador=?';
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
        $sql = 'insert into jugadores values (?,?,?,?,?)';
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
        $sql = 'update jugadores set nombreJugador=?,posicionJugador=?,sueldoJugador=?,equipoJugador=? where idJugador=?';
        $datos = array($obj->nombreJugador, $obj->posicionJugador, $obj->sueldoJugador, $obj->equipoJugador, $obj->idJugador);
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
}
