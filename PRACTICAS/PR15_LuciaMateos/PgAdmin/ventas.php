<?php
    require('../Funciones/funcionesBD.php');
    require('../Funciones/BD.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Ventas</title>
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
                echo '<li><a href="almacen.php">Almacén</a></li>';
            }
            ?>
        </ul>
    </nav>
    <main class="venta">
        <table>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Fecha compra</th>
                <th>Cod producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th></th>
            </tr>
            <tr>
            <?php
            // require('../Conexion/conexionBD.php');
            //Transaccion
            try {
                $conexion = new PDO('mysql:host='.$_SERVER['SERVER_ADDR'].';dbname='.BBDD, USER, PASS);
                //Seleccionamos todos los datos que tiene la tabla de canciones
                $sql = 'select * from ventas';
                $resultado=$conexion->query($sql);
                //Recorremos la tabla para ir incorporando cada dato a la tabla en el lugar correspondiente
                while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['id_ventas'] . '</td>';
                    echo '<td>' . $row['usuario_ventas'] . '</td>';
                    echo '<td>' . $row['fecha_compra'] . '</td>';
                    echo '<td>' . $row['cod_producto'] . '</td>';
                    echo '<td>' . $row['cantidad'] . '</td>';
                    echo '<td>' . $row['precio_total'] . '</td>';
                    if (esAdmin()) {
                        echo "<td>";
                        echo '<a href="../Funciones/modificarBD.php?opcion=elimina_venta='.$valor['id_ventas'].'"><i class="fa-solid fa-cart-arrow-down"></i> Eliminar</a>';
                        echo " ";
                        echo '<a href="../Funciones/modificarBD.php?opcion=modifica_ventas='.$valor['id_ventas'].'"><i class="fa-solid fa-cart-arrow-down"></i> Modificar</a>';
                        echo "</td>";     
                    }
                    echo '</tr>';
                }
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
            ?>
        </table>
    </main>
    <footer>
        <div class="politicas">
            <a href="#">Politica de Cookies</a>
            <a href="#">Politica de Privacidad</a>
        </div>
    </footer>
</body>
</html>

