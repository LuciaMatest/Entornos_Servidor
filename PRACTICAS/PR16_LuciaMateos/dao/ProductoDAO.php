<?php
class ProductoDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from productos;';
        $datos = array();
        $resultado = parent::ejecuta($sql, $datos);
        $arrayProducto = array();
        while ($objeto = $resultado->fetchObject()) {
            $producto = new Producto(
                $objeto->cod_producto,
                $objeto->imagen_alta,
                $objeto->imagen_baja,
                $objeto->nombre,
                $objeto->descripcion,
                $objeto->precio,
                $objeto->stock,
            );
            array_push($arrayProducto, $objeto);
        }
        return $arrayProducto;
    }

    public static function findById($id)
    {
        $sql = 'select * from productos where cod_producto=?;';
        $datos = array($id);
        $resultado = parent::ejecuta($sql, $datos);
        $objeto = $resultado->fetchObject();
        if ($objeto) {
            return $producto = new Producto(
                $objeto->cod_producto,
                $objeto->imagen_alta,
                $objeto->imagen_baja,
                $objeto->nombre,
                $objeto->descripcion,
                $objeto->precio,
                $objeto->stock,
            );
        } else {
            return 'No existe el producto';
        }
    }

    public static function update($objeto)
    {
        $actualiza = 'update productos set imagen_alta=?,imagen_baja=?,nombre=?,descripcion=?,precio=?,stock=? where cod_producto=?;';
        $datos = array(
            $objeto->imagen_alta,
            $objeto->imagen_baja,
            $objeto->nombre,
            $objeto->descripcion,
            $objeto->precio,
            $objeto->stock,
            $objeto->cod_producto,
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
        $inserta = "insert into productos values (?,?,?,?,?);";
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
        $elimina = "delete from productos where cod_producto=?;";
        $datos = array($id);
        $resultado = parent::ejecuta($elimina, $datos);
        if ($resultado->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }
}
