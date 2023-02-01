<?php
class ProductoDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from productos;';
        $datos = array();
        $resultado = parent::ejecuta($sql, $datos);
        $arrayProducto = array();
        while ($producto = $resultado->fetchObject()) {
            $producto = new Producto(
                $producto->cod_producto,
                $producto->imagen_alta,
                $producto->imagen_baja,
                $producto->nombre,
                $producto->descripcion,
                $producto->precio,
                $producto->stock,
            );
            array_push($arrayProducto, $producto);
        }
        return $arrayProducto;
    }

    public static function findById($id)
    {
        $sql = 'select * from productos where cod_producto=?;';
        $datos = array($id);
        $resultado = parent::ejecuta($sql, $datos);
        $producto = $resultado->fetchObject();
        if ($producto) {
            return $producto = new Producto(
                $producto->cod_producto,
                $producto->imagen_alta,
                $producto->imagen_baja,
                $producto->nombre,
                $producto->descripcion,
                $producto->precio,
                $producto->stock,
            );
        } else {
            return 'No existe el producto';
        }
    }

    public static function update($producto)
    {
        $actualiza = 'update productos set imagen_alta=?,imagen_baja=?,nombre=?,descripcion=?,precio=?,stock=? where cod_producto=?;';
        $datos = array(
            $producto->imagen_alta,
            $producto->imagen_baja,
            $producto->nombre,
            $producto->descripcion,
            $producto->precio,
            $producto->stock,
            $producto->cod_producto,
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
        $inserta = "insert into productos values (?,?,?,?,?);";
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
