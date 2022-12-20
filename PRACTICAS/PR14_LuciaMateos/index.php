<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./Estilo/style.css">
    <title>Index</title>
</head>

<body>
    <header>
        <h1>PR13</h1>
    </header>
    <main>
        <ul class="menú">
            <li><a href="#">BBDD Música</a></li>
        </ul>
        <?php
            require('./Conexion/conexionBD.php');
            require('./Funciones/funcionesBD.php');
            //Cuando pulsamos en crear
            if (crearBBDD()) {
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                $script = usarBBDD();
                $conexion->exec($sql);
            }
        ?>
            <form action="./index.php" method="post">
                <?php
                try {
                    $conexion2 = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);

                    echo "<a href='tablaMusica.php'> Ver tabla </a><br>";
                    echo "<a href='user/modificarDatos.php?opcion=inserta'> Insertar nuevos datos </a>";
                    
                } catch (Exception $ex) {
                    if ($ex->getCode() == 2002) {
                        echo '<span style="color:brown"> Fallo de conexión </span>';
                    }
                    if ($ex->getCode() == 1049) {
                        echo '<span style="color:brown"> Base de datos desconocida </span>';
                        //Si no hubiera base de datos, habilitar botón con un script de creación
                        echo '<input type="submit" value="Crear" name="crear">';
                    }
                    if ($ex->getCode() == 1045) {
                        echo '<span style="color:brown"> Datos incorrectos </span>';
                    }
                }
                ?>
            </form>

        <ul class="menú">
            <!-- Codigos PHP -->
            <li><a href="verCodigo.php?fichero=index.php">Código</a></li>
            <li><a href="verCodigo.php?fichero=./Funciones/funcionesBD.php">Código funciones</a></li>

            <li><a href="../../index.html">Volver</a></li>
        </ul>
    </main>
</body>

</html>