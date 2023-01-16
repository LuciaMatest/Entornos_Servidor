<?php
require '../Conexion/conexionBD.php';

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
            $_SESSION['user']=$user;
            $_SESSION['contraseña']=$pass;
            $_SESSION['nombre']=$row['nombre'];
            $_SESSION['email']=$row['correo'];
            $_SESSION['fecha']=$row['fecha'];
            $_SESSION['roles'] = $row['rol'];
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

function actualizarUsuario(){
    try {
        $conexion= new PDO('mysql:host='. $_SERVER['SERVER_ADDR']. ';dbname=' .BBDD,USER,PASS); 
        $sql="update usuarios set clave=:clave,nombre=:nombre,correo=:correo,fecha=:fecha,rol=:rol where usuario=:usuario;";
        $sql_preparada=$conexion->prepare($sql);
        $array = array(":usuario"=>$_REQUEST['user'],":clave"=>sha1($_REQUEST['contraseña']),":nombre"=>$_REQUEST['nombre'],":correo"=>$_REQUEST['email'],":fecha"=>$_REQUEST['fecha'],":rol"=>$_REQUEST['rol']);
        $sql_preparada->execute($array);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
        
    }
}

function ventaProducto(){
    try {
        $conexion= new PDO('mysql:host='. $_SERVER['SERVER_ADDR']. ';dbname=' .BBDD,USER,PASS); 
        $inserta="insert into ventas (usuario_ventas, fecha_compra, cod_producto, cantidad, precio_total) values (:usuario_ventas,:fecha_compra,:cod_producto,:cantidad,:precio_total);";
        $actualiza="update productos set stock=:stock where cod_producto=:cod_producto;";
        $nuevo_stock=$_REQUEST['stock']-$_REQUEST['cantidad'];

        $sql_preparada=$conexion->prepare($inserta);
        $sql_preparada2=$conexion->prepare($actualiza);

        $array= array(":usuario_ventas"=>$_SESSION['user'],":fecha_compra"=>date('Y-m-d'),":cod_producto"=>$_REQUEST['cod_producto'],":cantidad"=>$_REQUEST['cantidad'],":precio_total"=> floatval($_REQUEST['precio'])*(floatval($_REQUEST['cantidad'])));
        $array2= array(":cod_producto"=>$_REQUEST['cod_producto'],":stock"=>$nuevo_stock);

        $sql_preparada->execute($array);
        $sql_preparada2->execute($array2);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
        
    }
}

function añadirStock(){
    try {
        $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
        $inserta = "insert into albaran (fecha_albaran, cod_producto, cantidad, usuario_albaran) values (?,?,?,?);";
        $actualiza = "update productos set stock=:stock where cod_producto='" . $_REQUEST['cod_producto'] . "';" ;
        $nuevo_producto=$_REQUEST['stock']-$_REQUEST['cantidad'];

        $sql_preparada=$conexion->prepare($inserta);
        $sql_preparada2=$conexion->prepare($actualiza);

        $array = array(date('Y-m-d'),(int)($_REQUEST['cod_producto']),(int)($_REQUEST['cantidad']),$_SESSION['usuario_albaran']);
        $array2= array(":cod_producto"=>$_REQUEST['cod_producto'],":stock"=>$nuevo_producto);

        $sql_preparada->execute($array);
        $sql_preparada2->execute($array2);
    } catch (Exception $ex) {
        if ($ex->getCode() == 2002) {
            echo '<span style="color:brown"> Fallo de conexión </span>';
        }
        if ($ex->getCode() == 1049) {
            echo '<span style="color:brown"> Base de datos desconocida </span>';
        }
        if ($ex->getCode() == 1045) {
            echo '<span style="color:brown"> Datos incorrectos </span>';
        }
    }finally{
        unset($conexion);
    }
}
