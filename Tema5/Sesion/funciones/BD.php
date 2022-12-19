<?php
require '../seguro/conexion.php';

function validarUser($user,$pass){
    try {
        $conexion = new PDO('mysql:host =' .HOST. ';dbname= ' .BBDD, USER, PASS);
        $sql = 'select * from usuarios where usuario = ? and clave = ?';
        $sql_preparada=$conexion->prepare($sql);
        //minimo sha512
        $pass_encriptada = sha1($pass);
        $array = array($user, $pass_encriptada);
        $sql_preparada = execute();
        //si devuelve algo hacemos el login
        if ($sql_preparada->rowCount() == 1) {
            session_start();
            //validamos el inicio de sesion
            $_SESSION['validado'] = true;
            $row = $sql_preparada->fetch();
            $_SESSION['user'] = $user;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['perfil'] = $row['perfil'];
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