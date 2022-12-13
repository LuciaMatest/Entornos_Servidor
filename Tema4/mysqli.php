<?php
    require('./Seguro/conexion.php');
//Conexion con funciones
// try{
//     $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');

    //Consultar la base de datos
    // $sql = 'select * from equipo';
    // $resultado = mysqli_query($conexion,$sql);
    //ALL
    // echo '<pre>';
    // echo '<br>All';
    // print_r($resultado->fetch_all());
    // echo '</pre>';

    //ARRAY
    // echo '<br>Array';
    // while ($row = $resultado->fetch_array()) {
    //     echo '<pre>';
    //     print_r($row);
    //     echo '</pre>';
    // }

    //OBJECT
    // echo '<br>Object';
    // while ($row = $resultado->fetch_object()) {
    //     echo '<pre>';
    //     print_r($row);
    //     echo '</pre>';
    // }


    //cerrar conexion
//     mysqli_close($conexion);
// }catch(Exception $ex){
//     echo mysqli_connect_errno();
//     echo mysqli_connect_error();
// }


//Conexion con objetos
// try{
//     $conexion0 = new mysqli();
//     $conexion0->connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');
//     //cerrar conexion
//     $conexion0->close();
// }catch(Exception $ex){
//     echo $conexion0->mysqli_connect_errno;
//     echo $conexion0->mysqli_connect_error;
// }

//Consultas preparadas select
// try{
//     $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');

//     //Consultar la base de datos
//     $sql = 'select * from equipo where id = ? and nombre = ?';
//     $consulta_preparada = mysqli_stmt_init($conexion);
//     mysqli_stmt_prepare($consulta_preparada, $sql);
//     $id = 1;
//     $nombre = 'España';
//     //para que sea numerico con una i y para que sea string con una s
//     mysqli_stmt_bind_param($consulta_preparada, 'is', $id, $nombre);
//     mysqli_stmt_execute($consulta_preparada);

//     mysqli_stmt_bind_result($consulta_preparada, $r_id, $r_nombre);
//     while(mysqli_stmt_fetch($consulta_preparada)){
//         echo '<br>Id: '.$r_id. ',nombre: ' .$r_nombre;
//     }
//     //cerrar conexion
//     mysqli_close($conexion);
// }catch(Exception $ex){
//     echo mysqli_connect_errno();
//     echo mysqli_connect_error();
// }

//Consultas preparadas insert
// try{
//     $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');

//     //Consultar la base de datos
//     $sql = 'insert into equipo values(?,?)';
//     $consulta_preparada = mysqli_stmt_init($conexion);
//     mysqli_stmt_prepare($consulta_preparada, $sql);
//     $id = 3;
//     $nombre = 'Japon';
//     //para que sea numerico con una i y para que sea string con una s
//     mysqli_stmt_bind_param($consulta_preparada, 'is', $id, $nombre);
//     mysqli_stmt_execute($consulta_preparada);
    
//     echo mysqli_stmt_affected_rows($consulta_preparada);
//     //cerrar conexion
//     mysqli_close($conexion);
// }catch(Exception $ex){
//     echo mysqli_connect_errno();
//     echo mysqli_connect_error();
//     echo $ex->getMessage();
// }

//Consultas preparadas update
// try{
//     $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');

//     //Consultar la base de datos
//     $sql = 'update equipo set nombre = ? where nombre = \'Japon\' ';
//     $consulta_preparada = mysqli_stmt_init($conexion);
//     mysqli_stmt_prepare($consulta_preparada, $sql);
//     $nombre = 'China';
//     //para que sea numerico con una i y para que sea string con una s
//     mysqli_stmt_bind_param($consulta_preparada, 's', $nombre);
//     mysqli_stmt_execute($consulta_preparada);
//     echo mysqli_stmt_affected_rows($consulta_preparada);

//     //cerrar conexion
//     mysqli_close($conexion);
// }catch(Exception $ex){
//     echo mysqli_connect_errno();
//     echo mysqli_connect_error();
//     echo $ex->getMessage();
// }

//Transacciones
// Conjunto de instrucciones SQL, agrupadas lógicamente, que o bien se ejecutan todas sobre la base de datos o bien no se ejecuta ninguna. Una transferencia bancaria entre dos cuentas supone un ejemplo claro para ilustrar el concepto de transacción.
// try{
//     $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');

//     //Insertar tres equipos y el ultimo ponemos mal la id
//     mysqli_autocommit($conexion, false);
//     $sql = 'insert into equipo values(4, \'Alemania\');';
//     $sql1 = 'insert into equipo values(5, \'Rusia\');';
//     $sql2 = 'insert into equipo values(5, \'Brasil\');';
//     mysqli_query($conexion, $sql);
//     mysqli_query($conexion, $sql1);
//     //mysqli_query($conexion, $sql2);
//     mysqli_commit($conexion);
// }catch(Exception $ex){
//     echo mysqli_connect_errno();
//     echo mysqli_connect_error();
//     echo $ex->getMessage();
//     mysqli_rollback($conexion);
// }finally{
//     mysqli_close($conexion);
// }
?>
