<?php
function usarBBDD(){
    return file_get_contents('./BBDD/peluqueria.sql');
}

// function existe($nombre){
//     if (isset($_REQUEST[$nombre]))
//         return true;
//     return false;
// }

function vacio($nombre){
    if (empty($_REQUEST[$nombre])) {
        return true;
    }
    return false;
}

function enviado(){
    if (isset($_REQUEST['enviar'])) {
        return true;
    }
    return false;
}

// function crearBBDD(){
//     if (isset($_REQUEST['crear']))
//     return true;
//     return false;
// }

//Patrones
function patronContraseña(){

}

function patronFecha(){
    $patron = '/^(\d{4})\-(0[1-9]|1[0-2])\-([0-2][0-9]|3[0-1])$/';
    if(preg_match($patron, $_REQUEST['fecha'])==1){
        return true;
    }
    return false;
}


// function modificarDatos(){
//     try {
//         $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
//         $actualiza = "update canciones set id='" .$_REQUEST['id']. "',fecha='" .$_REQUEST['fecha']. "',cancion='" .$_REQUEST['cancion']. "',duracion='" .$_REQUEST['duracion']. "' where id='" . $_REQUEST['clave'] . "';" ;
//         $conexion->exec($actualiza);
//     } catch (Exception $ex) {
//         if ($ex->getCode() == 2002) {
//             echo '<span style="color:brown"> Fallo de conexión </span>';
//         }
//         if ($ex->getCode() == 1049) {
//             echo '<span style="color:brown"> Base de datos desconocida </span>';
//         }
//         if ($ex->getCode() == 1045) {
//             echo '<span style="color:brown"> Datos incorrectos </span>';
//         }
//     }finally{
//         unset($conexion);
//     }
// }

// function insetarDatos(){
//     try {
//         $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
//         $inserta = "insert into canciones values ('" .$_REQUEST['id']. "','" .$_REQUEST['fecha']. "','" .$_REQUEST['cancion']. "','" .$_REQUEST['duracion']. "');" ;
//         $conexion->exec($inserta);
//     } catch (Exception $ex) {
//         if ($ex->getCode() == 2002) {
//             echo '<span style="color:brown"> Fallo de conexión </span>';
//         }
//         if ($ex->getCode() == 1049) {
//             echo '<span style="color:brown"> Base de datos desconocida </span>';
//         }
//         if ($ex->getCode() == 1045) {
//             echo '<span style="color:brown"> Datos incorrectos </span>';
//         }
//     }finally{
//         unset($conexion);
//     }
// }

// function eliminarDatos(){
//     try {
//         $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
//         $elimina = "delete from canciones where id='" .$_REQUEST['clave']. "';" ;
//         $conexion->exec($elimina);
//     } catch (Exception $ex) {
//         if ($ex->getCode() == 2002) {
//             echo '<span style="color:brown"> Fallo de conexión </span>';
//         }
//         if ($ex->getCode() == 1049) {
//             echo '<span style="color:brown"> Base de datos desconocida </span>';
//         }
//         if ($ex->getCode() == 1045) {
//             echo '<span style="color:brown"> Datos incorrectos </span>';
//         }
//     }finally{
//         unset($conexion);
//     }
// }
?>