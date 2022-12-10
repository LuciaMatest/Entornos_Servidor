<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./Estilo/style.css">
    <title>Modificar BBDD</title>
</head>

<body>
    <header>
        <h1>PR12</h1>
    </header>
    <main>
        <ul class="menú">
            <li><a href="#">BBDD Música</a></li>
        </ul>
        <?php
            require('./Conexion/conexionBD.php');
            require('./Funciones/funcionesBD.php');
 
            //Cuando pulsamos el boton de enviar
            if (enviado()) {
                //Si se modifica algo
                if ($_REQUEST['opcion'] == 'modifica') {
                    try {
                        $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                        $actualiza = "update canciones set fecha='" .$_REQUEST['fecha']. "', cancion='" .$_REQUEST['cancion']. "', duracion='" .$_REQUEST['duracion']. "' where id='" . $_REQUEST['id'] . "';" ;
                        mysqli_multi_query($conexion, $actualiza);
                        //cerrar conexion
                        mysqli_close($conexion);
                    } catch (Exception $ex) {
                        if ($ex->getCode()==2002) {
                            echo 'Fallo de conexión';
                        }
                        if ($ex->getCode()==1049){
                            echo 'Base de datos desconocida';
                        }
                        if ($ex->getCode()==1045){
                            echo 'Datos incorrectos';
                        }
                    }
                    //Actualizada la base de datos se redigirá a la tabla.
                    header("Location: ./tablaMusica.php");
                }
                //Si se inserta algo
                elseif ($_REQUEST['opcion'] == 'inserta') {
                    try {
                        $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                        $inserta = "insert into canciones values ('" .$_REQUEST['fecha']. "','" .$_REQUEST['cancion']. "','" .$_REQUEST['duracion']. "');" ;
                        mysqli_multi_query($conexion, $inserta);
                        //cerrar conexion
                        mysqli_close($conexion);
                    } catch (Exception $ex) {
                        if ($ex->getCode()==2002) {
                            echo 'Fallo de conexión';
                        }
                        if ($ex->getCode()==1049){
                            echo 'Base de datos desconocida';
                        }
                        if ($ex->getCode()==1045){
                            echo 'Datos incorrectos';
                        }
                    }
                    //Actualizada la base de datos se redigirá a la tabla.
                    header("Location: ./tablaMusica.php");
                }
            }
            //Si se elimina algo
            elseif ($_REQUEST['opcion'] == 'elige') {
                try {
                    $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                    $elimina = "delete from canciones where id='" .$_REQUEST['id']. "';" ;
                    mysqli_multi_query($conexion, $elimina);
                    //cerrar conexion
                    mysqli_close($conexion);
                } catch (Exception $ex) {
                    if ($ex->getCode()==2002) {
                        echo 'Fallo de conexión';
                    }
                    if ($ex->getCode()==1049){
                        echo 'Base de datos desconocida';
                    }
                    if ($ex->getCode()==1045){
                        echo 'Datos incorrectos';
                    }
                }
                //Actualizada la base de datos se redigirá a la tabla.
                header("Location: ./tablaMusica.php");
            }

            
            try {
                $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                if ($_REQUEST['opcion'] == 'modifica') {
                    //Seleccionamos todos los datos que tiene la tabla de canciones
                    $sql = 'select * from canciones';
                    mysqli_multi_query($conexion, $sql);
                    //Recorremos la tabla
                    while ($row = $resultado->fetch_array()) {
                        $id = $row['id'];
                        $fecha = $row['fecha'];
                        $cancion = $row['cancion'];
                        $duracion = $row['duracion'];
                    }
                }
                //cerrar conexion
                mysqli_close($conexion);
            } catch (Exception $ex) {
                if ($ex->getCode()==2002) {
                    echo 'Fallo de conexión';
                }
                if ($ex->getCode()==1049){
                    echo 'Base de datos desconocida';
                }
                if ($ex->getCode()==1045){
                    echo 'Datos incorrectos';
                }
            }
        ?>
        <form action="./modificarBBDD.php" method="post">
            <input type="hidden" name="opciones"
            value="<?
                echo $_REQUEST['opcion'];
            ?>">

            <input type="hidden" name="id"
            value="<?
                if ($_REQUEST['opcion'] == 'modifica') {
                    echo $id;
                }
            ?>">

            <label for="idFecha">Fecha:</label>
            <input type="text" name="fecha" id="idFecha" placeholder="Fecha"
            value="<?
                if ($_REQUEST['opcion'] == 'modifica') {
                    echo $fecha;
                }
            ?>">

            <label for="idCancion">Canción:</label>
            <input type="text" name="cancion" id="idCancion" placeholder="Cancion"
            value="<?
                if ($_REQUEST['opcion'] == 'modifica') {
                    echo $cancion;
                }
            ?>">

            <label for="idDuracion">Duración:</label>
            <input type="text" name="duracion" id="idDuracion" placeholder="Duracion"
            value="<?
                if ($_REQUEST['opcion'] == 'modifica') {
                    echo $duracion;
                }
            ?>">

            <input type="submit" value="Modificar" name="enviar">
        </form>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=modificarBBDD.php">Código</a></li>

            <li><a href="../../index.html">Volver</a></li>
        </ul>
    </main>
</body>

</html>