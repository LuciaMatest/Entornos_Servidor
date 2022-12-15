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
 
            $opcion=$_REQUEST['opcion'];
            
            //Cuando pulsamos el boton de enviar
            if (enviado() && patronID() && patronFecha() && patronDuracion()) {
                //Si se modifica algo
                if ($opcion == 'modifica') {
                    $clave=$_REQUEST['clave'];
                    try {
                        $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                        $actualiza = "update canciones set id='" .$_REQUEST['id']. "',fecha='" .$_REQUEST['fecha']. "',cancion='" .$_REQUEST['cancion']. "',duracion='" .$_REQUEST['duracion']. "' where id='" . $_REQUEST['clave'] . "';" ;
                        mysqli_query($conexion, $actualiza);
                        //cerrar conexion
                        mysqli_close($conexion);
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
                    }
                    //Actualizada la base de datos se redigirá a la tabla.
                    header("Location: ./tablaMusica.php");
                }
                //Si se inserta algo
                elseif ($opcion == 'inserta') {
                    try {
                        $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                        $inserta = "insert into canciones values ('" .$_REQUEST['id']. "','" .$_REQUEST['fecha']. "','" .$_REQUEST['cancion']. "','" .$_REQUEST['duracion']. "');" ;
                        mysqli_query($conexion, $inserta);
                        //cerrar conexion
                        mysqli_close($conexion);
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
                    }
                    //Actualizada la base de datos se redigirá a la tabla.
                    header("Location: ./tablaMusica.php");
                }
            }
            //Si se elimina algo
            elseif ($opcion == 'elimina') {
                $clave=$_REQUEST['clave'];
                try {
                    $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                    $elimina = "delete from canciones where id='" .$_REQUEST['clave']. "';" ;
                    mysqli_query($conexion, $elimina);
                    //cerrar conexion
                    mysqli_close($conexion);
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
                }
                //Actualizada la base de datos se redigirá a la tabla.
                header("Location: ./tablaMusica.php");
            }
        ?>
        <?
            //Mostraremos la informacion que queremos modificar dependiendo de que 'boton' seleccionemos
            try {
                $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                if ($opcion == 'modifica') {
                    $clave=$_REQUEST['clave'];
                    //Seleccionamos todos los datos de una de la opciones que tenemos en la lista
                    $sql="select * from canciones where id='" . $_REQUEST['clave'] . "';";
                    $resultado = mysqli_query($conexion, $sql);
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
                if ($ex->getCode() == 2002) {
                    echo '<span style="color:brown"> Fallo de conexión </span>';
                }
                if ($ex->getCode() == 1049) {
                    echo '<span style="color:brown"> Base de datos desconocida </span>';
                }
                if ($ex->getCode() == 1045) {
                    echo '<span style="color:brown"> Datos incorrectos </span>';
                }
            }
        ?>
        <!-- Formulario -->
        <form action="./modificarBBDD.php" method="post">
            <!-- input oculto para mantener un seguimiento de que registros de la base de datos necesitan actualizarse cuando un formulario de actualización es remitido -->
            <input type="hidden" name="opcion"
            value="<?
                echo $opcion;
            ?>">
            <!-- input oculto para recordar el ID del registro que ha sido editado -->
            <input type="hidden" name="clave" value="<?
                if ($opcion=='modifica') {
                    echo $clave;
                }
            ?>">
            <!-- ID -->
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" placeholder="id"
            value="<?
                if ($opcion == 'modifica') {
                    echo $id;
                }
            ?>">
            <?
                //comprobar que no este vacio y valido, si lo está pongo un error
                if (enviado()) {
                    if (vacio("id")){
                        ?>
                        <span style="color:brown"> Introduce id</span>
                        <?
                    } elseif (!patronID()) {
                        ?>
                        <span style="color:brown"> iD no válida, revise</span>
                        <?
                    }
                }
            ?>
            <!-- Fecha -->
            <label for="fecha">Fecha:</label>
            <input type="text" name="fecha" id="fecha" placeholder="Fecha"
            value="<?
                if ($opcion == 'modifica') {
                    echo $fecha;
                }
            ?>">
            <?
                //comprobar que no este vacio y valido, si lo está pongo un error
                if (enviado()) {
                    if (vacio("fecha")){
                        ?>
                        <span style="color:brown"> Introduce fecha</span>
                        <?
                    } elseif (!patronFecha()) {
                        ?>
                        <span style="color:brown"> Fecha no válida, revise</span>
                        <?
                    }
                }
            ?>
            <!-- Canción -->
            <label for="cancion">Canción:</label>
            <input type="text" name="cancion" id="cancion" placeholder="Cancion"
            value="<?
                if ($opcion == 'modifica') {
                    echo $cancion;
                }
            ?>">
            <?
                //comprobar que no este vacio y valido, si lo está pongo un error
                if (enviado()) {
                    if (vacio("cancion")){
                        ?>
                        <span style="color:brown"> Introduce cancion</span>
                        <?
                    }
                }
            ?>
            <!-- Duración -->
            <label for="duracion">Duración:</label>
            <input type="text" name="duracion" id="duracion" placeholder="Duracion"
            value="<?
                if ($opcion== 'modifica') {
                    echo $duracion;
                }
            ?>">
            <?
                //comprobar que no este vacio y valido, si lo está pongo un error
                if (enviado()) {
                    if (vacio("duracion")){
                        ?>
                        <span style="color:brown"> Introduce duracion</span>
                        <?
                    } elseif (!patronDuracion()) {
                        ?>
                        <span style="color:brown"> Duracion no válida, revise</span>
                        <?
                    }
                }
            ?>
            <!-- Botón con el que insertamos o modificamos uno o varios datos -->
            <input type="submit" value="Modificar/Insertar" name="enviar">
        </form>
        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=modificarBBDD.php">Código</a></li>

            <li><a href="index.php">Volver</a></li>
        </ul>
    </main>
</body>

</html>