<?

class UsuarioDAO extends FactoryBD implements DAO
{
    public static function findAll()
    {
        $sql = 'select * from usuarios;';
        $datos = array();
        $devuelve = parent::ejecuta($sql, $datos);
        $arrayUsuario = array();
        while ($obj = $devuelve->fetchObject()) {
            $usuario = new Usuario(
                $obj->id,
                $obj->nombre,
                $obj->password,
                $obj->perfil
            );
            array_push($arrayUsuario, $usuario);
        }
        return $arrayUsuario;
    }
    public static function findById($id)
    {
        $sql = 'select * from usuarios where id=?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetchObject();
        if ($obj) {
            return $usuario = new Usuario(
                $obj->id,
                $obj->nombre,
                $obj->password,
                $obj->perfil
            );
        } else {
            return 'No existe el usuario';
        }
    }
    public static function delete($id)
    {
        $sql = 'delete from usuarios where id=?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return 'No ha borrado';
        } else {
            return 'Usuario borrado';
        }
    }
    public static function insert($objeto)
    {
        $sql = 'insert into usuarios values (?,?,?,?)';
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
    //CAMBIAR
    public static function update($objeto)
    {
        $sql = 'update usuarios set nombre=?,password=?,perfil=? where id=?';
        $datos = array(
            $objeto->nombre,
            $objeto->password,
            $objeto->perfil,
            $objeto->id
        );
        $devuelve = parent::ejecuta($sql, $datos);
        if ($devuelve->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function valida($user, $pass)
    {
        $sql = 'select * from usuarios where nombre=? and password=?;';
        $datos = array($user, $pass);
        $devuelve = parent::ejecuta($sql, $datos);
        $obj = $devuelve->fetchObject();
        if ($obj) {
            return $usuario = new Usuario(
                $obj->id,
                $obj->nombre,
                $obj->password,
                $obj->perfil
            );
        } else {
            $_SESSION['error']='No existe el usuario';
            return null;
        }
    }
}
