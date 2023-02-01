<?php
class UsuarioDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from usuarios;';
        $datos = array();
        $resultado = parent::ejecuta($sql, $datos);
        $arrayUsuario = array();
        while ($producto = $resultado->fetchObject()) {
            $usuario = new Usuario(
                $producto->usuario,
                $producto->clave,
                $producto->nombre,
                $producto->correo,
                $producto->fecha,
                $producto->rol
            );
            array_push($arrayUsuario, $usuario);
        }
        return $arrayUsuario;
    }

    public static function findById($id)
    {
        $sql = 'select * from usuarios where usuario=?;';
        $datos = array($id);
        $resultado = parent::ejecuta($sql, $datos);
        $producto = $resultado->fetchObject();
        if ($producto) {
            return $usuario = new Usuario(
                $producto->usuario,
                $producto->clave,
                $producto->nombre,
                $producto->correo,
                $producto->fecha,
                $producto->rol
            );
        } else {
            return 'No existe el usuario';
        }
    }

    public static function update($producto)
    {
        $actualiza = 'update usuarios set clave=?,nombre=?,correo=?,rol=? where usuario=?;';
        $datos = array(
            $producto->clave,
            $producto->nombre,
            $producto->correo,
            $producto->fecha,
            $producto->rol,
            $producto->usuario
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
        $inserta = "insert into usuarios values (?,?,?,?,?);";
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
        $elimina = "delete from usuarios where usuario=?;";
        $datos = array($id);
        $resultado = parent::ejecuta($elimina, $datos);
        if ($resultado->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function valida($user, $pass)
    {
        $sql = 'select * from usuarios where usuario=? and clave=?;';
        $passh = sha1($pass);
        $datos = array($user, $passh);
        $resultado = parent::ejecuta($sql, $datos);
        $producto = $resultado->fetchObject();
        if ($producto) {
            return $usuario = new Usuario(
                $producto->usuario,
                $producto->clave,
                $producto->nombre,
                $producto->correo,
                $producto->fecha,
                $producto->rol
            );
        } else {
            return 'No existe el usuario';
        }
    }
}
