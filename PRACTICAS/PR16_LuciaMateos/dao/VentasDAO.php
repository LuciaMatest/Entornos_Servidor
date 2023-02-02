<?php
class VentasDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from ventas;';
        $datos = array();
        $resultado = parent::ejecuta($sql, $datos);
        $arrayVentas = array();
        while ($objeto = $resultado->fetchObject()) {
            $ventas = new Ventas(
                $objeto->id_ventas,
                $objeto->usuario_ventas,
                $objeto->fecha_compra,
                $objeto->cod_producto,
                $objeto->cantidad,
                $objeto->precio_total
            );
            array_push($arrayVentas, $ventas);
        }
        return $arrayVentas;
    }

    public static function findById($id)
    {
        $sql = 'select * from ventas where id_ventas=?;';
        $datos = array($id);
        $resultado = parent::ejecuta($sql, $datos);
        $objeto = $resultado->fetchObject();
        if ($objeto) {
            return $ventas = new Ventas(
                $objeto->id_ventas,
                $objeto->usuario_ventas,
                $objeto->fecha_compra,
                $objeto->cod_producto,
                $objeto->cantidad,
                $objeto->precio_total
            );
        } else {
            return 'No existe la venta';
        }
    }

    public static function update($objeto)
    {
        $actualiza = 'update ventas set usuario_ventas=?,fecha_compra=?,cod_producto=?,cantidad=?,precio_total=? where id_ventas=?;';
        $datos = array(
            $objeto->usuario_ventas,
            $objeto->fecha_compra,
            $objeto->cod_producto,
            $objeto->cantidad,
            $objeto->precio_total,
            $objeto->id_ventas
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
        $inserta = "insert into ventas values (?,?,?,?,?,?);";
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
        $elimina = "delete from ventas where id_ventas=?;";
        $datos = array($id);
        $resultado = parent::ejecuta($elimina, $datos);
        if ($resultado->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
}
