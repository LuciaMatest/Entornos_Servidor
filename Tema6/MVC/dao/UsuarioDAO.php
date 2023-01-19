<?php
    class UsuarioDAO extends FactoryBD implements DAO{
        public static function findAll(){
            $sql = 'select * from usuarios;';
            $datos = array();
            $resultado = parent::ejecuta($sql,$datos);
            $arrayUsuario = array();
            while ($row = $resultado->fetchObject()) {
                $usuario = new Usuario(
                    $row->usuario,
                    $row->clave,
                    $row->nombre,
                    $row->correo,
                    $row->perfil
                );
                array_push($arrayUsuario,$usuario);
            }
            return $arrayUsuario;
        }

        public static function findById($id){
            $sql = 'select * from usuarios where usuario=?;';
            $datos = array($id);
            $resultado = parent::ejecuta($sql,$datos);
            $row = $resultado->fetchObject();
            if ($row) {
                return $usuario = new Usuario(
                    $row->usuario,
                    $row->clave,
                    $row->nombre,
                    $row->correo,
                    $row->perfil
                );
            } else {
                return 'No existe el usuario';
            }
        }

        public static function update($objeto){
            $actualiza = 'update usuarios set clave=?,correo=?,perfil=? where usuario=?;';
            $datos = array(
                $objeto->usuario,
                $objeto->clave,
                $objeto->nombre,
                $objeto->correo,
                $objeto->perfil
            );
            $resultado = parent::ejecuta($actualiza,$datos);
            if ($resultado->rowCount() == 0) {
                return false;
            } else {
                return true;
            }
        }

        public static function insert($objeto){
            $inserta = "insert into usuarios values (?,?,?,?,?);";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $att) {
                array_push($datos,$att);
            }
            parent::ejecute($inserta,$datos);

        }

        public static function delete($id){
            $elimina = "delete from usuarios where usuario=?;";
            $datos = array($id);
            $resultado = parent::ejecuta($elimina,$datos);
            if ($resultado->rowCount() == 0) {
                return 'No se ha borrado';
            } else {
                return 'Se ha borrado correctamente';
            }
            
        }

        public static function valida($user,$pass){
            $sql = 'select * from usuarios where usuario=? and clave=?;';
            $passh = sha1($pass);
            $datos = array($user,$passh);
            $resultado = parent::ejecuta($sql,$datos);
            $row = $resultado->fetchObject();
            if ($row) {
                return $usuario = new Usuario(
                    $row->usuario,
                    $row->clave,
                    $row->nombre,
                    $row->correo,
                    $row->perfil
                );
            } else {
                return 'No existe el usuario';
            }
        }
    }
?>