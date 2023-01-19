<?

    class UsuarioDAO extends FactoryBD implements DAO{
        public static function findAll(){
            $sql='select * from usuarios;';
            $datos=array();
            $devuelve=parent::ejecuta($sql,$datos);
            $arrayUsuario=array();
            while($obj= $devuelve->fetchObject()){
                /*echo "<pre>";
                print_r($obj);
                echo "</pre>";*/
                $usuario=new Usuario($obj->usuario,$obj->clave,$obj->nombre,$obj->correo,$obj->perfil);
                array_push($arrayUsuario,$usuario);
            }
            return $arrayUsuario;
        }
        public static function findById($id){
            $sql='select * from usuarios where usuario=?;';
            $datos=array($id);
            $devuelve = parent::ejecuta($sql,$datos);
            $obj=$devuelve->fetchObject();
            if ($obj) {
                return $usuario= new Usuario($obj->usuario,$obj->clave,$obj->nombre,$obj->correo,$obj->perfil);
            }else{
                return 'No existe el usuario';
            }
        }
        public static function delete($id){
            $sql='delete from usuarios where usuario=?;';
            $datos=array($id);
            $devuelve=parent::ejecuta($sql,$datos);  
            if ($devuelve->rowCount()==0){
                return 'No ha borrado';
            }else{
                return 'Borrado';
            }        
            
        }
        public static function insert($objeto){
            $sql='insert into usuarios values (?,?,?,?,?)';
            $objeto=(array)$objeto;
            $datos=array();
            foreach ($objeto as $att) {
                array_push($datos,$att);
            }
            parent::ejecuta($sql,$datos);
        }
        public static function update($objeto){
            $sql='update usuarios set clave=?,nombre=?,correo=?,perfil=? where usuario=?';
            $datos=array($objeto->clave,$objeto->nombre,$objeto->correo,$objeto->perfil,$objeto->usuario);
            $devuelve=parent::ejecuta($sql,$datos);
            if ($devuelve->rowCount()==0){
                return 'No actualizado';
            }else{
                return 'Actualizado';
            }
        }

        public static function valida($user,$pass){
            $sql='select * from usuarios where usuario=? and clave=?;';
            $passh= sha1($pass);
            $datos=array($user,$passh);
            $devuelve = parent::ejecuta($sql,$datos);
            $obj=$devuelve->fetchObject();
            if ($obj) {
                return $usuario= new Usuario($obj->usuario,$obj->clave,$obj->nombre,$obj->correo,$obj->perfil);
            }else{
                return 'No existe el usuario';
            }
        }
    }
?>