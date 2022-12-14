<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./Estilo/style.css">
    <title>Tabla musica</title>
</head>

<body>
    <header>
        <h1>PR12</h1>
    </header>
    <main>
        <ul class="menú">
            <li><a href="#">BBDD Música</a></li>
        </ul>
        <!-- Creamos la tabla -->
        <table align="center">
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Canción</th>
                <th>Duración</th>
                <th>Borrar/Modificar</th>
            </tr>
            <?php
            require('./Conexion/conexionBD.php');
            //Transaccion
            try {
                $conexion = mysqli_connect($_SERVER['SERVER_ADDR'], USER, PASS, BBDD);
                //Seleccionamos todos los datos que tiene la tabla de canciones
                $sql = 'select * from canciones';
                $resultado = mysqli_query($conexion, $sql);
                //Recorremos la tabla para ir incorporando cada dato a la tabla en el lugar correspondiente
                while ($row = $resultado->fetch_array()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['fecha'] . '</td>';
                    echo '<td>' . $row['cancion'] . '</td>';
                    echo '<td>' . $row['duracion'] . '</td>';
                    echo "<td>";
                    echo "<a href='modificarBBDD.php?opcion=elimina&clave=" . $row['id'] . "'>Borrar</a>";
                    echo "/";
                    echo "<a href='modificarBBDD.php?opcion=modifica&clave=" . $row['id'] . "'>Modificar</a>";
                    echo "</td>";
                    echo '</tr>';
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
        </table>
        <ul class="menú">
            <li><a href='modificarBBDD.php?opcion=inserta'> Insertar nuevo registro </a></li>
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=tablaMusica.php">Código</a></li>

            <li><a href="./index.php">Volver</a></li>
        </ul>
    </main>
</body>

</html>