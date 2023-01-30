<?php
class AlbaranDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from albaran;';
        $datos = array();
        $resultado = parent::ejecuta($sql, $datos);
        $arrayAlbaran = array();
        while ($row = $resultado->fetchObject()) {
            $albaran = new Albaran(
                $row->id_albaran,
                $row->fecha_albaran,
                $row->cod_producto,
                $row->cantidad,
                $row->usuario_albaran
            );
            array_push($arrayAlbaran, $albaran);
        }
        return $arrayAlbaran;
    }

    public static function findById($id)
    {
        $sql = 'select * from albaran where id_albaran=?;';
        $datos = array($id);
        $resultado = parent::ejecuta($sql, $datos);
        $row = $resultado->fetchObject();
        if ($row) {
            return $albaran = new Albaran(
                $row->id_albaran,
                $row->fecha_albaran,
                $row->cod_producto,
                $row->cantidad,
                $row->usuario_albaran
            );
        } else {
            return 'No existe el albaran';
        }
    }

    public static function update($objeto)
    {
        $actualiza = 'update albaran set fecha_albaran=?,cod_producto=?,cantidad=?,usuario_albaran=? where id_albaran=?;';
        $datos = array(
            $objeto->fecha_albaran,
            $objeto->cod_producto,
            $objeto->cantidad,
            $objeto->usuario_albaran,
            $objeto->id_albaran
        );
        $resultado = parent::ejecuta($actualiza, $datos);
        if ($resultado->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function insert($objeto)
    {
        $inserta = "insert into albaran values (?,?,?,?,?);";
        $objeto = (array)$objeto;
        $datos = array();
        foreach ($objeto as $att) {
            array_push($datos, $att);
        }
        $resultado = parent::ejecuta($inserta, $datos);
        if ($resultado->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function delete($id)
    {
        $elimina = "delete from albaran where id_albaran=?;";
        $datos = array($id);
        $resultado = parent::ejecuta($elimina, $datos);
        if ($resultado->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
}
