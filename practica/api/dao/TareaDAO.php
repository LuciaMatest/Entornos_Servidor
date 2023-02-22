<?
require_once './dao/FactoryBD.php';
require_once './dao/DAO.php';

class TareaDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from tareas';
        $datos = array();
        $devuelve = parent::ejecuta($sql, $datos);
        $arrayTareas = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        return $arrayTareas;
    }

    public static function findById($id)
    {
        $sql = 'select * from tareas where id=?';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetch(PDO::FETCH_ASSOC);
        if ($obj) {
            return $obj;
        } else {
            return 'No existe la tarea';
        }
    }

    public static function delete($id)
    {
        $sql = 'delete from tareas where id=?;';
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
        $sql = 'insert into tareas values (?,?,?,?,?)';
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
        $sql = 'update tareas set titulo=?,descripcion=?,fecha_creacion=?,fecha_vencida=?,estado=? where id=?';
        $datos = array(
            $objeto->titulo,
            $objeto->descripcion,
            $objeto->fecha_creacion,
            $objeto->fecha_vencida,
            $objeto->estado,
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
