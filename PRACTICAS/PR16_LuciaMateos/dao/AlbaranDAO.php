<?php
class AlbaranDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from albaran;';
        $datos = array();
        $resultado = parent::ejecuta($sql, $datos);
        $arrayAlbaran = array();
        while ($producto = $resultado->fetchObject()) {
            $albaran = new Albaran(
                $producto->id_albaran,
                $producto->fecha_albaran,
                $producto->cod_producto,
                $producto->cantidad,
                $producto->usuario_albaran
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
        $producto = $resultado->fetchObject();
        if ($producto) {
            return $albaran = new Albaran(
                $producto->id_albaran,
                $producto->fecha_albaran,
                $producto->cod_producto,
                $producto->cantidad,
                $producto->usuario_albaran
            );
        } else {
            return 'No existe el albaran';
        }
    }

    public static function update($producto)
    {
        $actualiza = 'update albaran set fecha_albaran=?,cod_producto=?,cantidad=?,usuario_albaran=? where id_albaran=?;';
        $datos = array(
            $producto->fecha_albaran,
            $producto->cod_producto,
            $producto->cantidad,
            $producto->usuario_albaran,
            $producto->id_albaran
        );
        $resultado = parent::ejecuta($actualiza, $datos);
        if ($resultado->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function insert($producto)
    {
        $inserta = "insert into albaran values (?,?,?,?,?);";
        $producto = (array)$producto;
        $datos = array();
        foreach ($producto as $att) {
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
