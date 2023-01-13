<?php
    require('funcionesBD.php');
    require('../Conexion/conexionBD.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>modificarBBDD</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="../imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
        <?php
            session_start();
            if (estaValidado()) {
                echo '<a href="../Paginas/carrito.php"><i class="fa-solid fa-cart-arrow-down"></i>Carrito</a>';
                echo '<a href="../Paginas/perfil.php"><i class="fa-solid fa-pen-to-square"></i>Perfil</a>';
                echo '<a href="../Paginas/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>';
            } else {
        ?>
            <a href="login.php"><i class="fa-solid fa-user"></i>Iniciar Sesión</a>
        <?php
            }
        ?>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../Paginas/tienda.php">Tienda</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Ofertas</a></li>
            <?php
            if (esAdmin() || esModerador()) {
                echo '<li><a href="../PgAdmin/almacen.php">Almacén</a></li>';
                echo '<li><a href="../PgAdmin/ventas.php">Ventas</a></li>';
            }
            ?>
        </ul>
    </nav>
    <main>
        <?php
        $opcion=$_REQUEST['opcion'];

        //Eliminar
        if ($opcion == 'elimina_venta') {
            $clave=$_REQUEST['clave'];
            try {
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                $elimina = "delete from ventas where id_ventas='" .$_REQUEST['clave']. "';" ;
                $conexion->exec($elimina);
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

            header("Location: ../PgAdmin/ventas.php");
        }
        if ($opcion == 'elimina_albaran') {
            $clave=$_REQUEST['clave'];
            try {
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                $elimina = "delete from albaran where id_albaran='" .$_REQUEST['clave']. "';" ;
                $conexion->exec($elimina);
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

            header("Location: ../PgAdmin/almacen.php");
        }

        //Modificar
        if ($opcion == 'modifica_ventas') {
            $clave=$_REQUEST['clave'];
            try {
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                $actualiza = "update ventas set id_ventas= ? ,usuario_ventas= ?,fecha_compra= ?,cod_producto= ?,cantidad= ?,precio_total= ? where id_ventas='" . $_REQUEST['clave'] . "';" ;
                $conexion->exec($actualiza);
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
            header("Location: ./PgAdmin/ventas.php");
        }

        if ($opcion == 'modifica_albaran') {
            $clave=$_REQUEST['clave'];
            try {
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                $actualiza = "update albaran set id_albaran='" .$_REQUEST['id_albaran']. "',fecha_albaran='" .$_REQUEST['fecha_albaran']. "',cod_producto='" .$_REQUEST['cod_producto']. "',cantidad='" .$_REQUEST['cantidad']. "',usuario_albaran='" .$_REQUEST['usuario_albaran']. "' where id_albaran='" . $_REQUEST['clave'] . "';" ;
                $conexion->exec($actualiza);
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
            header("Location: ../PgAdmin/almacen.php");
        }
        ?>

    </main>
</body>

</html>