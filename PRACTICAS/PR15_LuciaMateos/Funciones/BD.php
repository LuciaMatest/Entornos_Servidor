<?php


function validarUser($user,$pass){
    try {
        $conexion = new PDO('mysql:host =' .$_SERVER['SERVER_ADDR']. ';dbname=' .BBDD, USER, PASS);
        $sql = 'select * from usuarios where usuario = ? and clave = ?';
        $sql_preparada=$conexion->prepare($sql);
        //minimo sha512
        $pass_encriptada = sha1($pass);
        $array = array($user, $pass_encriptada);
        $sql_preparada->execute($array);
        //si devuelve algo hacemos el login
        if ($sql_preparada->rowCount() == 1) {
            session_start();
            //validamos el inicio de sesion
            $_SESSION['validado'] = true;
            $row = $sql_preparada->fetch();
            $_SESSION['user'] = $user;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['perfil'] = $row['rol'];
            unset($conexion);
            return true;
        }
        //sino no hay login retorna falso
        else {
            unset($conexion);
            return false;
        }
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function nuevoUsuario(){
    try {
        $conexion = new PDO('mysql:host =' .$_SERVER['SERVER_ADDR']. ';dbname=' .BBDD, USER, PASS);
        $sql="insert into usuarios values (:usuario,:clave,:nombre,:correo,:fecha,:rol);";
        $sql_preparada=$conexion->prepare($sql);
        $array = array(":usuario"=>$_REQUEST['user'],":clave"=>sha1($_REQUEST['contraseña']),":nombre"=>$_REQUEST['nombre'],":correo"=>$_REQUEST['email'],":fecha"=>$_REQUEST['fecha'],":rol"=>$_REQUEST['rol']);
        $sql_preparada->execute($array);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function validaUser($user){
    try {
        $conexion = new PDO('mysql:host =' .$_SERVER['SERVER_ADDR']. ';dbname=' .BBDD, USER, PASS);
        $sql="select * from usuarios where usuario= ? ;";
        $sql_preparada=$conexion->prepare($sql);
        $array = array($user);
        $sql_preparada->execute($array);
        //si devuelve algo hacemos el login
        if ($sql_preparada->rowCount() == 0) {
            unset($conexion);
            return true;
        }
        //sino no hay login retorna falso
        else {
            unset($conexion);
            return false;
        }
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}
?>