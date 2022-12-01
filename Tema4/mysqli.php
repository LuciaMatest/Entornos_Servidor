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

//Consultas preparadas
try{
    $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS, 'mundial');

    //Consultar la base de datos
    $sql = 'select * from equipo where id = ? and nombre = ?';
    $consulta_preparada = mysqli_stmt_init($conexion);
    mysqli_stmt_prepare($consulta_preparada, $sql);
    $id = 1;
    $nombre = 'España';
    //para que sea numerico con una i
    mysqli_stmt_bind_param($consulta_preparada, 'i', $id);
    //para que sea string con una s
    mysqli_stmt_bind_param($consulta_preparada, 's', $nombre);
    mysqli_stmt_execute($consulta_preparada, );
    //cerrar conexion
    mysqli_close($conexion);
}catch(Exception $ex){
    echo mysqli_connect_errno();
    echo mysqli_connect_error();
}
?>