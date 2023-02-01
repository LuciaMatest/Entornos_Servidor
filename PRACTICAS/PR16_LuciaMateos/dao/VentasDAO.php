<?php
class VentasDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from ventas;';
        $datos = array();
        $resultado = parent::ejecuta($sql, $datos);
        $arrayVentas = array();
        while ($producto = $resultado->fetchObject()) {
            $ventas = new Ventas(
                $producto->id_ventas,
                $producto->usuario_ventas,
                $producto->fecha_compra,
                $producto->cod_producto,
                $producto->cantidad,
                $producto->precio_total
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
        $producto = $resultado->fetchObject();
        if ($producto) {
            return $ventas = new Ventas(
                $producto->id_ventas,
                $producto->usuario_ventas,
                $producto->fecha_compra,
                $producto->cod_producto,
                $producto->cantidad,
                $producto->precio_total
            );
        } else {
            return 'No existe la venta';
        }
    }

    public static function update($producto)
    {
        $actualiza = 'update ventas set usuario_ventas=?,fecha_compra=?,cod_producto=?,cantidad=?,precio_total=? where id_ventas=?;';
        $datos = array(
            $producto->usuario_ventas,
            $producto->fecha_compra,
            $producto->cod_producto,
            $producto->cantidad,
            $producto->precio_total,
            $producto->id_ventas
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
        $inserta = "insert into ventas values (?,?,?,?,?);";
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
